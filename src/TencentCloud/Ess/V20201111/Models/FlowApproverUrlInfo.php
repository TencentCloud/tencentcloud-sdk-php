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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署链接信息。
 *
 * @method string getSignUrl() 获取签署短链接。
注意:
1. 该链接有效期为<b>30分钟</b>，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持<b>移动端浏览器</b>打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
 * @method void setSignUrl(string $SignUrl) 设置签署短链接。
注意:
1. 该链接有效期为<b>30分钟</b>，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持<b>移动端浏览器</b>打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
 * @method integer getApproverType() 获取签署人类型。
- **1**: 个人
 * @method void setApproverType(integer $ApproverType) 设置签署人类型。
- **1**: 个人
 * @method string getApproverName() 获取签署人姓名。
 * @method void setApproverName(string $ApproverName) 设置签署人姓名。
 * @method string getApproverMobile() 获取签署人手机号。
 * @method void setApproverMobile(string $ApproverMobile) 设置签署人手机号。
 * @method string getLongUrl() 获取签署长链接。
注意:
1. 该链接有效期为**30分钟**，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持**移动端浏览器**打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
 * @method void setLongUrl(string $LongUrl) 设置签署长链接。
注意:
1. 该链接有效期为**30分钟**，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持**移动端浏览器**打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
 */
class FlowApproverUrlInfo extends AbstractModel
{
    /**
     * @var string 签署短链接。
注意:
1. 该链接有效期为<b>30分钟</b>，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持<b>移动端浏览器</b>打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
     */
    public $SignUrl;

    /**
     * @var integer 签署人类型。
- **1**: 个人
     */
    public $ApproverType;

    /**
     * @var string 签署人姓名。
     */
    public $ApproverName;

    /**
     * @var string 签署人手机号。
     */
    public $ApproverMobile;

    /**
     * @var string 签署长链接。
注意:
1. 该链接有效期为**30分钟**，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持**移动端浏览器**打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
     */
    public $LongUrl;

    /**
     * @param string $SignUrl 签署短链接。
注意:
1. 该链接有效期为<b>30分钟</b>，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持<b>移动端浏览器</b>打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
     * @param integer $ApproverType 签署人类型。
- **1**: 个人
     * @param string $ApproverName 签署人姓名。
     * @param string $ApproverMobile 签署人手机号。
     * @param string $LongUrl 签署长链接。
注意:
1. 该链接有效期为**30分钟**，同时需要注意保密，不要外泄给无关用户。
2. 该链接不支持小程序嵌入，仅支持**移动端浏览器**打开。
3. <font color="red">生成的链路后面不能再增加参数</font>（会出现覆盖链接中已有参数导致错误）
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
        if (array_key_exists("SignUrl",$param) and $param["SignUrl"] !== null) {
            $this->SignUrl = $param["SignUrl"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("LongUrl",$param) and $param["LongUrl"] !== null) {
            $this->LongUrl = $param["LongUrl"];
        }
    }
}
