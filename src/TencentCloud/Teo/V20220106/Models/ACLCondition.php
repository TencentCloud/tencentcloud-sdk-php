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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精准防护条件
 *
 * @method string getMatchFrom() 获取匹配字段
 * @method void setMatchFrom(string $MatchFrom) 设置匹配字段
 * @method string getMatchParam() 获取匹配字符串
 * @method void setMatchParam(string $MatchParam) 设置匹配字符串
 * @method string getOperator() 获取匹配关系
 * @method void setOperator(string $Operator) 设置匹配关系
 * @method string getMatchContent() 获取匹配内容
 * @method void setMatchContent(string $MatchContent) 设置匹配内容
 */
class ACLCondition extends AbstractModel
{
    /**
     * @var string 匹配字段
     */
    public $MatchFrom;

    /**
     * @var string 匹配字符串
     */
    public $MatchParam;

    /**
     * @var string 匹配关系
     */
    public $Operator;

    /**
     * @var string 匹配内容
     */
    public $MatchContent;

    /**
     * @param string $MatchFrom 匹配字段
     * @param string $MatchParam 匹配字符串
     * @param string $Operator 匹配关系
     * @param string $MatchContent 匹配内容
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
        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchParam",$param) and $param["MatchParam"] !== null) {
            $this->MatchParam = $param["MatchParam"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
