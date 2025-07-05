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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 封禁列表和放通列表结构体
 *
 * @method string getComment() 获取规则评论
 * @method void setComment(string $Comment) 设置规则评论
 * @method CustomWhiteRule getCustomRule() 获取自定义白名单规则
 * @method void setCustomRule(CustomWhiteRule $CustomRule) 设置自定义白名单规则
 * @method string getDirectionList() 获取0互联网出站 1互联网入站 5内网访问源 6内网访问目的
 * @method void setDirectionList(string $DirectionList) 设置0互联网出站 1互联网入站 5内网访问源 6内网访问目的
 * @method string getEndTime() 获取规则截止时间
 * @method void setEndTime(string $EndTime) 设置规则截止时间
 * @method integer getFwType() 获取放通的引擎: 1针对互联网边界 2针对nat防火墙 4针对vpc防火墙
 * @method void setFwType(integer $FwType) 设置放通的引擎: 1针对互联网边界 2针对nat防火墙 4针对vpc防火墙
 * @method string getIoc() 获取封禁和放通对象
 * @method void setIoc(string $Ioc) 设置封禁和放通对象
 */
class BanAndAllowRule extends AbstractModel
{
    /**
     * @var string 规则评论
     */
    public $Comment;

    /**
     * @var CustomWhiteRule 自定义白名单规则
     */
    public $CustomRule;

    /**
     * @var string 0互联网出站 1互联网入站 5内网访问源 6内网访问目的
     */
    public $DirectionList;

    /**
     * @var string 规则截止时间
     */
    public $EndTime;

    /**
     * @var integer 放通的引擎: 1针对互联网边界 2针对nat防火墙 4针对vpc防火墙
     */
    public $FwType;

    /**
     * @var string 封禁和放通对象
     */
    public $Ioc;

    /**
     * @param string $Comment 规则评论
     * @param CustomWhiteRule $CustomRule 自定义白名单规则
     * @param string $DirectionList 0互联网出站 1互联网入站 5内网访问源 6内网访问目的
     * @param string $EndTime 规则截止时间
     * @param integer $FwType 放通的引擎: 1针对互联网边界 2针对nat防火墙 4针对vpc防火墙
     * @param string $Ioc 封禁和放通对象
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
        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = new CustomWhiteRule();
            $this->CustomRule->deserialize($param["CustomRule"]);
        }

        if (array_key_exists("DirectionList",$param) and $param["DirectionList"] !== null) {
            $this->DirectionList = $param["DirectionList"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Ioc",$param) and $param["Ioc"] !== null) {
            $this->Ioc = $param["Ioc"];
        }
    }
}
