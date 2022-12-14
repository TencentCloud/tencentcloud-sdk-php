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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单变配参数对象
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getNewSubProductCode() 获取新产品标识,这里支持PRO_VERSION 专业版,FLAGSHIP 旗舰版
 * @method void setNewSubProductCode(string $NewSubProductCode) 设置新产品标识,这里支持PRO_VERSION 专业版,FLAGSHIP 旗舰版
 * @method integer getInquireNum() 获取扩容/缩容数,变配子产品忽略该参数
 * @method void setInquireNum(integer $InquireNum) 设置扩容/缩容数,变配子产品忽略该参数
 */
class OrderModifyObject extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 新产品标识,这里支持PRO_VERSION 专业版,FLAGSHIP 旗舰版
     */
    public $NewSubProductCode;

    /**
     * @var integer 扩容/缩容数,变配子产品忽略该参数
     */
    public $InquireNum;

    /**
     * @param string $ResourceId 资源ID
     * @param string $NewSubProductCode 新产品标识,这里支持PRO_VERSION 专业版,FLAGSHIP 旗舰版
     * @param integer $InquireNum 扩容/缩容数,变配子产品忽略该参数
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("NewSubProductCode",$param) and $param["NewSubProductCode"] !== null) {
            $this->NewSubProductCode = $param["NewSubProductCode"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }
    }
}
