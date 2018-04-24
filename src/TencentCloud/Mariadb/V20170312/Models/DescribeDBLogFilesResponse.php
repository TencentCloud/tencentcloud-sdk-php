<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc。
 * @method integer getType() 获取请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 * @method void setType(integer $Type) 设置请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 * @method integer getTotal() 获取请求日志总数
 * @method void setTotal(integer $Total) 设置请求日志总数
 * @method array getFiles() 获取包含uri、length、mtime（修改时间）等信息
 * @method void setFiles(array $Files) 设置包含uri、length、mtime（修改时间）等信息
 * @method string getVpcprefix() 获取如果是VPC网络的实例，做用本前缀加上URI为下载地址
 * @method void setVpcprefix(string $Vpcprefix) 设置如果是VPC网络的实例，做用本前缀加上URI为下载地址
 * @method string getNormalprefix() 获取如果是普通网络的实例，做用本前缀加上URI为下载地址
 * @method void setNormalprefix(string $Normalprefix) 设置如果是普通网络的实例，做用本前缀加上URI为下载地址
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeDBLogFiles返回参数结构体
 */
class DescribeDBLogFilesResponse extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var integer 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
     */
    public $Type;

    /**
     * @var integer 请求日志总数
     */
    public $Total;

    /**
     * @var array 包含uri、length、mtime（修改时间）等信息
     */
    public $Files;

    /**
     * @var string 如果是VPC网络的实例，做用本前缀加上URI为下载地址
     */
    public $Vpcprefix;

    /**
     * @var string 如果是普通网络的实例，做用本前缀加上URI为下载地址
     */
    public $Normalprefix;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc。
     * @param integer $Type 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
     * @param integer $Total 请求日志总数
     * @param array $Files 包含uri、length、mtime（修改时间）等信息
     * @param string $Vpcprefix 如果是VPC网络的实例，做用本前缀加上URI为下载地址
     * @param string $Normalprefix 如果是普通网络的实例，做用本前缀加上URI为下载地址
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new LogFileInfo();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("Vpcprefix",$param) and $param["Vpcprefix"] !== null) {
            $this->Vpcprefix = $param["Vpcprefix"];
        }

        if (array_key_exists("Normalprefix",$param) and $param["Normalprefix"] !== null) {
            $this->Normalprefix = $param["Normalprefix"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
