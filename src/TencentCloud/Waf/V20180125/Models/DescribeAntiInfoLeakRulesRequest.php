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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAntiInfoLeakRules请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getActionType() 获取动作类型
 * @method void setActionType(integer $ActionType) 设置动作类型
 * @method PageInfo getPageInfo() 获取翻页
 * @method void setPageInfo(PageInfo $PageInfo) 设置翻页
 */
class DescribeAntiInfoLeakRulesRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 动作类型
     */
    public $ActionType;

    /**
     * @var PageInfo 翻页
     */
    public $PageInfo;

    /**
     * @param string $Domain 域名
     * @param integer $ActionType 动作类型
     * @param PageInfo $PageInfo 翻页
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("PageInfo",$param) and $param["PageInfo"] !== null) {
            $this->PageInfo = new PageInfo();
            $this->PageInfo->deserialize($param["PageInfo"]);
        }
    }
}
