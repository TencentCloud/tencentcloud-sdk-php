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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateInstance请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIdList() 获取实例ID数组，例如["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
 * @method void setInstanceIdList(array $InstanceIdList) 设置实例ID数组，例如["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
 * @method string getDbType() 获取该参数已废弃
 * @method void setDbType(string $DbType) 设置该参数已废弃
 * @method array getIsolateReasonTypes() 获取实例退还原因类型
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) 设置实例退还原因类型
 * @method string getIsolateReason() 获取实例退还原因补充
 * @method void setIsolateReason(string $IsolateReason) 设置实例退还原因补充
 * @method boolean getSaveBackup() 获取保留备份
 * @method void setSaveBackup(boolean $SaveBackup) 设置保留备份
 */
class IsolateInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 实例ID数组，例如["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
     */
    public $InstanceIdList;

    /**
     * @var string 该参数已废弃
     */
    public $DbType;

    /**
     * @var array 实例退还原因类型
     */
    public $IsolateReasonTypes;

    /**
     * @var string 实例退还原因补充
     */
    public $IsolateReason;

    /**
     * @var boolean 保留备份
     */
    public $SaveBackup;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIdList 实例ID数组，例如["cynosdbbmysql-ins-asd","cynosdbmysql-ins-zxc"]
     * @param string $DbType 该参数已废弃
     * @param array $IsolateReasonTypes 实例退还原因类型
     * @param string $IsolateReason 实例退还原因补充
     * @param boolean $SaveBackup 保留备份
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

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("IsolateReasonTypes",$param) and $param["IsolateReasonTypes"] !== null) {
            $this->IsolateReasonTypes = $param["IsolateReasonTypes"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }

        if (array_key_exists("SaveBackup",$param) and $param["SaveBackup"] !== null) {
            $this->SaveBackup = $param["SaveBackup"];
        }
    }
}
