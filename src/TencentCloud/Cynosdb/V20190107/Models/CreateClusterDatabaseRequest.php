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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterDatabase请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getDbName() 获取数据库名
 * @method void setDbName(string $DbName) 设置数据库名
 * @method string getCharacterSet() 获取字符集类型
 * @method void setCharacterSet(string $CharacterSet) 设置字符集类型
 * @method string getCollateRule() 获取排序规则
 * @method void setCollateRule(string $CollateRule) 设置排序规则
 * @method array getUserHostPrivileges() 获取授权用户主机权限
 * @method void setUserHostPrivileges(array $UserHostPrivileges) 设置授权用户主机权限
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class CreateClusterDatabaseRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 数据库名
     */
    public $DbName;

    /**
     * @var string 字符集类型
     */
    public $CharacterSet;

    /**
     * @var string 排序规则
     */
    public $CollateRule;

    /**
     * @var array 授权用户主机权限
     */
    public $UserHostPrivileges;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $ClusterId 集群ID
     * @param string $DbName 数据库名
     * @param string $CharacterSet 字符集类型
     * @param string $CollateRule 排序规则
     * @param array $UserHostPrivileges 授权用户主机权限
     * @param string $Description 备注
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("CharacterSet",$param) and $param["CharacterSet"] !== null) {
            $this->CharacterSet = $param["CharacterSet"];
        }

        if (array_key_exists("CollateRule",$param) and $param["CollateRule"] !== null) {
            $this->CollateRule = $param["CollateRule"];
        }

        if (array_key_exists("UserHostPrivileges",$param) and $param["UserHostPrivileges"] !== null) {
            $this->UserHostPrivileges = [];
            foreach ($param["UserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->UserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
