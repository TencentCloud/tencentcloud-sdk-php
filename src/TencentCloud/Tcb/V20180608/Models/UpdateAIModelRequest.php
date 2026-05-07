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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAIModel请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境id</p>
 * @method string getGroupName() 获取<p>分组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>分组名</p>
 * @method string getBaseUrl() 获取<p>模型地址</p><p>枚举值：</p><ul><li>http://default.tcb： 默认模型地址，custom模型切换为builtin模型时使用</li></ul>
 * @method void setBaseUrl(string $BaseUrl) 设置<p>模型地址</p><p>枚举值：</p><ul><li>http://default.tcb： 默认模型地址，custom模型切换为builtin模型时使用</li></ul>
 * @method array getModels() 获取<p>模型名列表</p><p>Models 列表更新采用全量替换</p>
 * @method void setModels(array $Models) 设置<p>模型名列表</p><p>Models 列表更新采用全量替换</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method integer getStatus() 获取<p>模型状态, 1: 开启, 2: 关闭</p>
 * @method void setStatus(integer $Status) 设置<p>模型状态, 1: 开启, 2: 关闭</p>
 * @method AIModelSecret getSecret() 获取<p>模型密钥</p>
 * @method void setSecret(AIModelSecret $Secret) 设置<p>模型密钥</p>
 */
class UpdateAIModelRequest extends AbstractModel
{
    /**
     * @var string <p>环境id</p>
     */
    public $EnvId;

    /**
     * @var string <p>分组名</p>
     */
    public $GroupName;

    /**
     * @var string <p>模型地址</p><p>枚举值：</p><ul><li>http://default.tcb： 默认模型地址，custom模型切换为builtin模型时使用</li></ul>
     */
    public $BaseUrl;

    /**
     * @var array <p>模型名列表</p><p>Models 列表更新采用全量替换</p>
     */
    public $Models;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>模型状态, 1: 开启, 2: 关闭</p>
     */
    public $Status;

    /**
     * @var AIModelSecret <p>模型密钥</p>
     */
    public $Secret;

    /**
     * @param string $EnvId <p>环境id</p>
     * @param string $GroupName <p>分组名</p>
     * @param string $BaseUrl <p>模型地址</p><p>枚举值：</p><ul><li>http://default.tcb： 默认模型地址，custom模型切换为builtin模型时使用</li></ul>
     * @param array $Models <p>模型名列表</p><p>Models 列表更新采用全量替换</p>
     * @param string $Remark <p>备注</p>
     * @param integer $Status <p>模型状态, 1: 开启, 2: 关闭</p>
     * @param AIModelSecret $Secret <p>模型密钥</p>
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = [];
            foreach ($param["Models"] as $key => $value){
                $obj = new AIModel();
                $obj->deserialize($value);
                array_push($this->Models, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = new AIModelSecret();
            $this->Secret->deserialize($param["Secret"]);
        }
    }
}
