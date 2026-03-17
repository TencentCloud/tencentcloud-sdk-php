<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDB请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID，形如mssql-rljoi3bf</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，形如mssql-rljoi3bf</p>
 * @method array getNames() 获取<p>数据库名数组</p>
 * @method void setNames(array $Names) 设置<p>数据库名数组</p>
 * @method integer getNoDoBackup() 获取<p>删除数据库前是否创建备份。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setNoDoBackup(integer $NoDoBackup) 设置<p>删除数据库前是否创建备份。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class DeleteDBRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID，形如mssql-rljoi3bf</p>
     */
    public $InstanceId;

    /**
     * @var array <p>数据库名数组</p>
     */
    public $Names;

    /**
     * @var integer <p>删除数据库前是否创建备份。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $NoDoBackup;

    /**
     * @param string $InstanceId <p>实例ID，形如mssql-rljoi3bf</p>
     * @param array $Names <p>数据库名数组</p>
     * @param integer $NoDoBackup <p>删除数据库前是否创建备份。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("NoDoBackup",$param) and $param["NoDoBackup"] !== null) {
            $this->NoDoBackup = $param["NoDoBackup"];
        }
    }
}
