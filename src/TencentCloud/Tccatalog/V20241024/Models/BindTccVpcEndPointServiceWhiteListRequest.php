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
namespace TencentCloud\Tccatalog\V20241024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindTccVpcEndPointServiceWhiteList请求参数结构体
 *
 * @method string getEndPointServiceId() 获取终端节点服务Id
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务Id
 * @method string getUserUin() 获取需要开白的用户Uin
 * @method void setUserUin(string $UserUin) 设置需要开白的用户Uin
 * @method string getDescription() 获取用户描述
 * @method void setDescription(string $Description) 设置用户描述
 */
class BindTccVpcEndPointServiceWhiteListRequest extends AbstractModel
{
    /**
     * @var string 终端节点服务Id
     */
    public $EndPointServiceId;

    /**
     * @var string 需要开白的用户Uin
     */
    public $UserUin;

    /**
     * @var string 用户描述
     */
    public $Description;

    /**
     * @param string $EndPointServiceId 终端节点服务Id
     * @param string $UserUin 需要开白的用户Uin
     * @param string $Description 用户描述
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
