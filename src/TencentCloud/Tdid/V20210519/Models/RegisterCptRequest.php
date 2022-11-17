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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterCpt请求参数结构体
 *
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getCptJson() 获取CptJson的具体信息
 * @method void setCptJson(string $CptJson) 设置CptJson的具体信息
 * @method integer getCptId() 获取cptId 不填默认自增
 * @method void setCptId(integer $CptId) 设置cptId 不填默认自增
 */
class RegisterCptRequest extends AbstractModel
{
    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string CptJson的具体信息
     */
    public $CptJson;

    /**
     * @var integer cptId 不填默认自增
     */
    public $CptId;

    /**
     * @param integer $GroupId 群组ID
     * @param string $ClusterId 网络ID
     * @param string $CptJson CptJson的具体信息
     * @param integer $CptId cptId 不填默认自增
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CptJson",$param) and $param["CptJson"] !== null) {
            $this->CptJson = $param["CptJson"];
        }

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }
    }
}
