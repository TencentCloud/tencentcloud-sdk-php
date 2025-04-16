<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FavorInfo
 *
 * @method integer getPriority() 获取优先事项
 * @method void setPriority(integer $Priority) 设置优先事项
 * @method string getCatalog() 获取Catalog名称
 * @method void setCatalog(string $Catalog) 设置Catalog名称
 * @method string getDataBase() 获取DataBase名称
 * @method void setDataBase(string $DataBase) 设置DataBase名称
 * @method string getTable() 获取Table名称
 * @method void setTable(string $Table) 设置Table名称
 */
class FavorInfo extends AbstractModel
{
    /**
     * @var integer 优先事项
     */
    public $Priority;

    /**
     * @var string Catalog名称
     */
    public $Catalog;

    /**
     * @var string DataBase名称
     */
    public $DataBase;

    /**
     * @var string Table名称
     */
    public $Table;

    /**
     * @param integer $Priority 优先事项
     * @param string $Catalog Catalog名称
     * @param string $DataBase DataBase名称
     * @param string $Table Table名称
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("DataBase",$param) and $param["DataBase"] !== null) {
            $this->DataBase = $param["DataBase"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}
