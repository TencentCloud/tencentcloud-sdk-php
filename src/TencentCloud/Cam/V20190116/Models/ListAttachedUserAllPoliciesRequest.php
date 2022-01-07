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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAttachedUserAllPolicies请求参数结构体
 *
 * @method integer getTargetUin() 获取目标用户ID
 * @method void setTargetUin(integer $TargetUin) 设置目标用户ID
 * @method integer getRp() 获取每页数量，必须大于 0 且小于或等于 200
 * @method void setRp(integer $Rp) 设置每页数量，必须大于 0 且小于或等于 200
 * @method integer getPage() 获取页码，从 1开始，不能大于 200
 * @method void setPage(integer $Page) 设置页码，从 1开始，不能大于 200
 * @method integer getAttachType() 获取0:返回直接关联和随组关联策略，1:只返回直接关联策略，2:只返回随组关联策略
 * @method void setAttachType(integer $AttachType) 设置0:返回直接关联和随组关联策略，1:只返回直接关联策略，2:只返回随组关联策略
 * @method integer getStrategyType() 获取策略类型
 * @method void setStrategyType(integer $StrategyType) 设置策略类型
 * @method string getKeyword() 获取搜索关键字
 * @method void setKeyword(string $Keyword) 设置搜索关键字
 */
class ListAttachedUserAllPoliciesRequest extends AbstractModel
{
    /**
     * @var integer 目标用户ID
     */
    public $TargetUin;

    /**
     * @var integer 每页数量，必须大于 0 且小于或等于 200
     */
    public $Rp;

    /**
     * @var integer 页码，从 1开始，不能大于 200
     */
    public $Page;

    /**
     * @var integer 0:返回直接关联和随组关联策略，1:只返回直接关联策略，2:只返回随组关联策略
     */
    public $AttachType;

    /**
     * @var integer 策略类型
     */
    public $StrategyType;

    /**
     * @var string 搜索关键字
     */
    public $Keyword;

    /**
     * @param integer $TargetUin 目标用户ID
     * @param integer $Rp 每页数量，必须大于 0 且小于或等于 200
     * @param integer $Page 页码，从 1开始，不能大于 200
     * @param integer $AttachType 0:返回直接关联和随组关联策略，1:只返回直接关联策略，2:只返回随组关联策略
     * @param integer $StrategyType 策略类型
     * @param string $Keyword 搜索关键字
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("AttachType",$param) and $param["AttachType"] !== null) {
            $this->AttachType = $param["AttachType"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
