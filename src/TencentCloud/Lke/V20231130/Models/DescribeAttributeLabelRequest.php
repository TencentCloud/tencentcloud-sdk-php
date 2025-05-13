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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAttributeLabel请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getAttributeBizId() 获取属性ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置属性ID
 * @method integer getLimit() 获取每次加载的数量 
 * @method void setLimit(integer $Limit) 设置每次加载的数量 
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method string getQuery() 获取查询标签或相似标签
 * @method void setQuery(string $Query) 设置查询标签或相似标签
 * @method string getLastLabelBizId() 获取滚动加载游标的标签ID
 * @method void setLastLabelBizId(string $LastLabelBizId) 设置滚动加载游标的标签ID
 * @method string getQueryScope() 获取查询范围 all(或者传空):标准词和相似词 standard:标准词 similar:相似词
 * @method void setQueryScope(string $QueryScope) 设置查询范围 all(或者传空):标准词和相似词 standard:标准词 similar:相似词
 */
class DescribeAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 属性ID
     */
    public $AttributeBizId;

    /**
     * @var integer 每次加载的数量 
     */
    public $Limit;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var string 查询标签或相似标签
     */
    public $Query;

    /**
     * @var string 滚动加载游标的标签ID
     */
    public $LastLabelBizId;

    /**
     * @var string 查询范围 all(或者传空):标准词和相似词 standard:标准词 similar:相似词
     */
    public $QueryScope;

    /**
     * @param string $BotBizId 应用ID
     * @param string $AttributeBizId 属性ID
     * @param integer $Limit 每次加载的数量 
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param string $Query 查询标签或相似标签
     * @param string $LastLabelBizId 滚动加载游标的标签ID
     * @param string $QueryScope 查询范围 all(或者传空):标准词和相似词 standard:标准词 similar:相似词
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("LastLabelBizId",$param) and $param["LastLabelBizId"] !== null) {
            $this->LastLabelBizId = $param["LastLabelBizId"];
        }

        if (array_key_exists("QueryScope",$param) and $param["QueryScope"] !== null) {
            $this->QueryScope = $param["QueryScope"];
        }
    }
}
