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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveWorkflowDebugContext请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method array getAppVariableValueList() 获取<p>应用变量列表</p>
 * @method void setAppVariableValueList(array $AppVariableValueList) 设置<p>应用变量列表</p>
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method string getUserId() 获取<p>自定义用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>自定义用户ID</p>
 */
class SaveWorkflowDebugContextRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var array <p>应用变量列表</p>
     */
    public $AppVariableValueList;

    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>自定义用户ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param array $AppVariableValueList <p>应用变量列表</p>
     * @param string $SessionId <p>会话ID</p>
     * @param string $UserId <p>自定义用户ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppVariableValueList",$param) and $param["AppVariableValueList"] !== null) {
            $this->AppVariableValueList = [];
            foreach ($param["AppVariableValueList"] as $key => $value){
                $obj = new AppVariableValue();
                $obj->deserialize($value);
                array_push($this->AppVariableValueList, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
