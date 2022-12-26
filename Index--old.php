<?php
namespace Practice\Demoproxy\Controller\Index;
use Magento\Framework\App\ResourceConnection;
//use Magento\Framework\App\ObjectManager;

class Index extends \Magento\Framework\App\Action\Action
{
  protected $resourceConnection;
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    ResourceConnection $resourceConnection
   )
  {
   parent::__construct($context);
   $this->resourceConnection = $resourceConnection;
  }
  public function execute()
  {
    return $this->runSqlQuery('mgde_a_demo');
  }
  public function runSqlQuery($table)
  {
    /*$connection = $this->resourceConnection->getConnection();
    $table = $connection->getTableName('mgde_a_demo');
    $query = "SELECT * FROM ".$table;
    $result1 = $connection->fetchAll($query);
    print_r($result1);*/
    $connection = $this->resourceConnection->getConnection();
    $query = "SELECT * FROM ".$table;
    $result1 = $connection->fetchAll($query);
    echo "<pre>";
     print_r($result1);
    echo "</pre>";
    return $this->runInsertQuery('mgde_a_demo');
  }
  public function runInsertQuery($tablei)
  {
      //$connectioni = $this->resourceConnection->getConnection();
      //$tableColumn = ['id', 'name', 'created_at','updated_at','status'];
      //$tableData[] = [7, 'tiger.png', '2022-11-23 00:00:00','2022-11-30 00:00:00','1'];
      //$connectioni->insertArray($tablei, $tableColumn, $tableData);
      /*$query = "INSERT INTO " . $tablei . "(name, created_at,updated_at,status) VALUES ('dhoom.jpg', '2022-11-24 00:00:00','2022-11-28 00:00:00','1')";
      $connectioni->query($query);*/
      return $this->runUpdateQuery('mgde_a_demo');
  }
  public function runUpdateQuery($tableu)
  {
    $connectionu = $this->resourceConnection->getConnection();
    $id = 1;
    $queryu = "UPDATE ".$tableu. " SET name = 'acp.png' WHERE id = $id ";
    $connectionu->query($queryu);
  }
}
