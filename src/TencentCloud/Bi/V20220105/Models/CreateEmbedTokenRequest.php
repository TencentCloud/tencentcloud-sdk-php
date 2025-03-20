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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmbedToken请求参数结构体
 *
 * @method integer getProjectId() 获取分享项目id
 * @method void setProjectId(integer $ProjectId) 设置分享项目id
 * @method integer getPageId() 获取分享页面id，嵌出看板时此为空值0，ChatBI嵌出时不传
 * @method void setPageId(integer $PageId) 设置分享页面id，嵌出看板时此为空值0，ChatBI嵌出时不传
 * @method string getIntention() 获取embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
 * @method void setIntention(string $Intention) 设置embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
 * @method string getScope() 获取page表示嵌出页面，panel表示嵌出整个看板，ChatBI嵌出时使用project
 * @method void setScope(string $Scope) 设置page表示嵌出页面，panel表示嵌出整个看板，ChatBI嵌出时使用project
 * @method string getExpireTime() 获取过期时间。 单位：分钟 最大值：240。即，4小时 默认值：240
 * @method void setExpireTime(string $ExpireTime) 设置过期时间。 单位：分钟 最大值：240。即，4小时 默认值：240
 * @method string getExtraParam() 获取备用字段
 * @method void setExtraParam(string $ExtraParam) 设置备用字段
 * @method string getUserCorpId() 获取使用者企业Id(仅用于多用户)
 * @method void setUserCorpId(string $UserCorpId) 设置使用者企业Id(仅用于多用户)
 * @method string getUserId() 获取使用者Id(仅用于多用户)
 * @method void setUserId(string $UserId) 设置使用者Id(仅用于多用户)
 * @method integer getTicketNum() 获取访问次数限制，限制范围1-99999，为空则不设置访问次数限制
 * @method void setTicketNum(integer $TicketNum) 设置访问次数限制，限制范围1-99999，为空则不设置访问次数限制
 * @method string getGlobalParam() 获取全局筛选参数 报表过滤条件的全局参数。 格式为JSON格式的字符串
**目前仅支持字符类型页面参数绑定到全局参数
**
[
    {
        "ParamKey": "name",  //页面参数名称
        "JoinType": "AND",     // 连接方式,目前仅支持AND
        "WhereList": [
            {
                "Operator": "-neq",   // 操作符，参考以下说明
                "Value": [                   //操作值，单值数组只传一个值
                    "zZWJMD",
                    "ZzVGHX",
                    "湖南省",
                    "河北省"
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
                    "男"
                ]
            }
        ]
    }
]



Operator 目前支持
-neq  不等于!=操作符
-eq  等于=操作符
-is     in操作符

 * @method void setGlobalParam(string $GlobalParam) 设置全局筛选参数 报表过滤条件的全局参数。 格式为JSON格式的字符串
**目前仅支持字符类型页面参数绑定到全局参数
**
[
    {
        "ParamKey": "name",  //页面参数名称
        "JoinType": "AND",     // 连接方式,目前仅支持AND
        "WhereList": [
            {
                "Operator": "-neq",   // 操作符，参考以下说明
                "Value": [                   //操作值，单值数组只传一个值
                    "zZWJMD",
                    "ZzVGHX",
                    "湖南省",
                    "河北省"
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
                    "男"
                ]
            }
        ]
    }
]



Operator 目前支持
-neq  不等于!=操作符
-eq  等于=操作符
-is     in操作符

 * @method integer getTokenType() 获取100 不绑定用户, 一次创建一个token，UserCorpId和UserId 非必填，不支持 ChatBI 嵌出
200 单用户单token , 一次创建一个token， UserCorpId和UserId 必填
300 单用户多token, 一次创建多个token，UserCorpId和UserId 必填
 * @method void setTokenType(integer $TokenType) 设置100 不绑定用户, 一次创建一个token，UserCorpId和UserId 非必填，不支持 ChatBI 嵌出
200 单用户单token , 一次创建一个token， UserCorpId和UserId 必填
300 单用户多token, 一次创建多个token，UserCorpId和UserId 必填
 * @method integer getTokenNum() 获取一次创建的token数
 * @method void setTokenNum(integer $TokenNum) 设置一次创建的token数
 */
class CreateEmbedTokenRequest extends AbstractModel
{
    /**
     * @var integer 分享项目id
     */
    public $ProjectId;

    /**
     * @var integer 分享页面id，嵌出看板时此为空值0，ChatBI嵌出时不传
     */
    public $PageId;

    /**
     * @var string embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
     */
    public $Intention;

    /**
     * @var string page表示嵌出页面，panel表示嵌出整个看板，ChatBI嵌出时使用project
     */
    public $Scope;

    /**
     * @var string 过期时间。 单位：分钟 最大值：240。即，4小时 默认值：240
     */
    public $ExpireTime;

    /**
     * @var string 备用字段
     */
    public $ExtraParam;

    /**
     * @var string 使用者企业Id(仅用于多用户)
     */
    public $UserCorpId;

    /**
     * @var string 使用者Id(仅用于多用户)
     */
    public $UserId;

    /**
     * @var integer 访问次数限制，限制范围1-99999，为空则不设置访问次数限制
     */
    public $TicketNum;

    /**
     * @var string 全局筛选参数 报表过滤条件的全局参数。 格式为JSON格式的字符串
**目前仅支持字符类型页面参数绑定到全局参数
**
[
    {
        "ParamKey": "name",  //页面参数名称
        "JoinType": "AND",     // 连接方式,目前仅支持AND
        "WhereList": [
            {
                "Operator": "-neq",   // 操作符，参考以下说明
                "Value": [                   //操作值，单值数组只传一个值
                    "zZWJMD",
                    "ZzVGHX",
                    "湖南省",
                    "河北省"
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
                    "男"
                ]
            }
        ]
    }
]



Operator 目前支持
-neq  不等于!=操作符
-eq  等于=操作符
-is     in操作符

     */
    public $GlobalParam;

    /**
     * @var integer 100 不绑定用户, 一次创建一个token，UserCorpId和UserId 非必填，不支持 ChatBI 嵌出
200 单用户单token , 一次创建一个token， UserCorpId和UserId 必填
300 单用户多token, 一次创建多个token，UserCorpId和UserId 必填
     */
    public $TokenType;

    /**
     * @var integer 一次创建的token数
     */
    public $TokenNum;

    /**
     * @param integer $ProjectId 分享项目id
     * @param integer $PageId 分享页面id，嵌出看板时此为空值0，ChatBI嵌出时不传
     * @param string $Intention embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
     * @param string $Scope page表示嵌出页面，panel表示嵌出整个看板，ChatBI嵌出时使用project
     * @param string $ExpireTime 过期时间。 单位：分钟 最大值：240。即，4小时 默认值：240
     * @param string $ExtraParam 备用字段
     * @param string $UserCorpId 使用者企业Id(仅用于多用户)
     * @param string $UserId 使用者Id(仅用于多用户)
     * @param integer $TicketNum 访问次数限制，限制范围1-99999，为空则不设置访问次数限制
     * @param string $GlobalParam 全局筛选参数 报表过滤条件的全局参数。 格式为JSON格式的字符串
**目前仅支持字符类型页面参数绑定到全局参数
**
[
    {
        "ParamKey": "name",  //页面参数名称
        "JoinType": "AND",     // 连接方式,目前仅支持AND
        "WhereList": [
            {
                "Operator": "-neq",   // 操作符，参考以下说明
                "Value": [                   //操作值，单值数组只传一个值
                    "zZWJMD",
                    "ZzVGHX",
                    "湖南省",
                    "河北省"
                ]
            }
        ]
    },
    {
        "ParamKey": "genderParam",
        "JoinType": "AND",
        "WhereList": [
            {
                "Operator": "-neq",
                "Value": [
                    "男"
                ]
            }
        ]
    }
]



Operator 目前支持
-neq  不等于!=操作符
-eq  等于=操作符
-is     in操作符

     * @param integer $TokenType 100 不绑定用户, 一次创建一个token，UserCorpId和UserId 非必填，不支持 ChatBI 嵌出
200 单用户单token , 一次创建一个token， UserCorpId和UserId 必填
300 单用户多token, 一次创建多个token，UserCorpId和UserId 必填
     * @param integer $TokenNum 一次创建的token数
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = $param["Intention"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("UserCorpId",$param) and $param["UserCorpId"] !== null) {
            $this->UserCorpId = $param["UserCorpId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TicketNum",$param) and $param["TicketNum"] !== null) {
            $this->TicketNum = $param["TicketNum"];
        }

        if (array_key_exists("GlobalParam",$param) and $param["GlobalParam"] !== null) {
            $this->GlobalParam = $param["GlobalParam"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("TokenNum",$param) and $param["TokenNum"] !== null) {
            $this->TokenNum = $param["TokenNum"];
        }
    }
}
