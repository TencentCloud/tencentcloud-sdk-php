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
 * ModifyAIModelStatus请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getGroupName() 获取<p>分组名</p><p>枚举值：</p><ul><li>cloudbase： 生文系列内置模型</li><li>hunyuan-image： 生图系列内置模型</li></ul><p>系统内置分组固定标识</p>
 * @method void setGroupName(string $GroupName) 设置<p>分组名</p><p>枚举值：</p><ul><li>cloudbase： 生文系列内置模型</li><li>hunyuan-image： 生图系列内置模型</li></ul><p>系统内置分组固定标识</p>
 * @method array getModels() 获取<p>模型设置</p><p>空数组表示无操作</p>
 * @method void setModels(array $Models) 设置<p>模型设置</p><p>空数组表示无操作</p>
 */
class ModifyAIModelStatusRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>分组名</p><p>枚举值：</p><ul><li>cloudbase： 生文系列内置模型</li><li>hunyuan-image： 生图系列内置模型</li></ul><p>系统内置分组固定标识</p>
     */
    public $GroupName;

    /**
     * @var array <p>模型设置</p><p>空数组表示无操作</p>
     */
    public $Models;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $GroupName <p>分组名</p><p>枚举值：</p><ul><li>cloudbase： 生文系列内置模型</li><li>hunyuan-image： 生图系列内置模型</li></ul><p>系统内置分组固定标识</p>
     * @param array $Models <p>模型设置</p><p>空数组表示无操作</p>
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

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = [];
            foreach ($param["Models"] as $key => $value){
                $obj = new AIModelStatus();
                $obj->deserialize($value);
                array_push($this->Models, $obj);
            }
        }
    }
}
