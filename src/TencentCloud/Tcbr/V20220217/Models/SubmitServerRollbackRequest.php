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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitServerRollback请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getCurrentVersionName() 获取当前版本
 * @method void setCurrentVersionName(string $CurrentVersionName) 设置当前版本
 * @method string getRollbackVersionName() 获取回滚版本
 * @method void setRollbackVersionName(string $RollbackVersionName) 设置回滚版本
 * @method string getOperatorRemark() 获取操作标识
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作标识
 */
class SubmitServerRollbackRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 当前版本
     */
    public $CurrentVersionName;

    /**
     * @var string 回滚版本
     */
    public $RollbackVersionName;

    /**
     * @var string 操作标识
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param string $CurrentVersionName 当前版本
     * @param string $RollbackVersionName 回滚版本
     * @param string $OperatorRemark 操作标识
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("CurrentVersionName",$param) and $param["CurrentVersionName"] !== null) {
            $this->CurrentVersionName = $param["CurrentVersionName"];
        }

        if (array_key_exists("RollbackVersionName",$param) and $param["RollbackVersionName"] !== null) {
            $this->RollbackVersionName = $param["RollbackVersionName"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
