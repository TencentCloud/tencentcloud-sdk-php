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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpsertSession请求参数结构体
 *
 * @method string getDomain() 获取域名
入参限制：必填，必须为合法域名格式
 * @method void setDomain(string $Domain) 设置域名
入参限制：必填，必须为合法域名格式
 * @method string getSource() 获取会话来源位置
取值说明：get-从URL查询参数中提取，post-从POST Body中提取，cookie-从Cookie中提取，header-从HTTP Header中提取
入参限制：必填，取值范围为get/post/cookie/header
 * @method void setSource(string $Source) 设置会话来源位置
取值说明：get-从URL查询参数中提取，post-从POST Body中提取，cookie-从Cookie中提取，header-从HTTP Header中提取
入参限制：必填，取值范围为get/post/cookie/header
 * @method string getCategory() 获取提取类别
取值说明：location-按位置提取（使用StartOffset和EndOffset），match-按字符串匹配提取（使用KeyOrStartMat和EndMat），exact_key-按精准Key提取（使用Key字段）
入参限制：必填，取值范围为location/match/exact_key
 * @method void setCategory(string $Category) 设置提取类别
取值说明：location-按位置提取（使用StartOffset和EndOffset），match-按字符串匹配提取（使用KeyOrStartMat和EndMat），exact_key-按精准Key提取（使用Key字段）
入参限制：必填，取值范围为location/match/exact_key
 * @method string getKeyOrStartMat() 获取提取key或者起始匹配模式
入参限制：最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的起始字符串；当Category为exact_key时，表示精确匹配的key名
 * @method void setKeyOrStartMat(string $KeyOrStartMat) 设置提取key或者起始匹配模式
入参限制：最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的起始字符串；当Category为exact_key时，表示精确匹配的key名
 * @method string getEndMat() 获取结束匹配模式
入参限制：必填，最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的结束字符串
 * @method void setEndMat(string $EndMat) 设置结束匹配模式
入参限制：必填，最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的结束字符串
 * @method string getStartOffset() 获取起始偏移位置
入参限制：必填，整数字符串
约束条件：EndOffset不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的起始字节位置
 * @method void setStartOffset(string $StartOffset) 设置起始偏移位置
入参限制：必填，整数字符串
约束条件：EndOffset不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的起始字节位置
 * @method string getEndOffset() 获取结束偏移位置
入参限制：必填，整数字符串
约束条件：不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的结束字节位置
 * @method void setEndOffset(string $EndOffset) 设置结束偏移位置
入参限制：必填，整数字符串
约束条件：不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的结束字节位置
 * @method string getEdition() 获取版本
 * @method void setEdition(string $Edition) 设置版本
 * @method string getSessionName() 获取会话名称
说明：用于标识会话的可读名称
 * @method void setSessionName(string $SessionName) 设置会话名称
说明：用于标识会话的可读名称
 * @method integer getSessionID() 获取会话ID
说明：传-1表示新增会话（系统自动生成ID），传已有ID表示更新该会话配置
约束条件：新增时每个域名最多10条会话规则
 * @method void setSessionID(integer $SessionID) 设置会话ID
说明：传-1表示新增会话（系统自动生成ID），传已有ID表示更新该会话配置
约束条件：新增时每个域名最多10条会话规则
 * @method string getKey() 获取会话标识参数（精准匹配key）
入参限制：key中"."分隔的层级不超过2层
说明：当Category为exact_key时使用，表示要精确匹配的参数名
 * @method void setKey(string $Key) 设置会话标识参数（精准匹配key）
入参限制：key中"."分隔的层级不超过2层
说明：当Category为exact_key时使用，表示要精确匹配的参数名
 */
class UpsertSessionRequest extends AbstractModel
{
    /**
     * @var string 域名
入参限制：必填，必须为合法域名格式
     */
    public $Domain;

    /**
     * @var string 会话来源位置
取值说明：get-从URL查询参数中提取，post-从POST Body中提取，cookie-从Cookie中提取，header-从HTTP Header中提取
入参限制：必填，取值范围为get/post/cookie/header
     */
    public $Source;

    /**
     * @var string 提取类别
取值说明：location-按位置提取（使用StartOffset和EndOffset），match-按字符串匹配提取（使用KeyOrStartMat和EndMat），exact_key-按精准Key提取（使用Key字段）
入参限制：必填，取值范围为location/match/exact_key
     */
    public $Category;

    /**
     * @var string 提取key或者起始匹配模式
入参限制：最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的起始字符串；当Category为exact_key时，表示精确匹配的key名
     */
    public $KeyOrStartMat;

    /**
     * @var string 结束匹配模式
入参限制：必填，最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的结束字符串
     */
    public $EndMat;

    /**
     * @var string 起始偏移位置
入参限制：必填，整数字符串
约束条件：EndOffset不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的起始字节位置
     */
    public $StartOffset;

    /**
     * @var string 结束偏移位置
入参限制：必填，整数字符串
约束条件：不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的结束字节位置
     */
    public $EndOffset;

    /**
     * @var string 版本
     */
    public $Edition;

    /**
     * @var string 会话名称
说明：用于标识会话的可读名称
     */
    public $SessionName;

    /**
     * @var integer 会话ID
说明：传-1表示新增会话（系统自动生成ID），传已有ID表示更新该会话配置
约束条件：新增时每个域名最多10条会话规则
     */
    public $SessionID;

    /**
     * @var string 会话标识参数（精准匹配key）
入参限制：key中"."分隔的层级不超过2层
说明：当Category为exact_key时使用，表示要精确匹配的参数名
     */
    public $Key;

    /**
     * @param string $Domain 域名
入参限制：必填，必须为合法域名格式
     * @param string $Source 会话来源位置
取值说明：get-从URL查询参数中提取，post-从POST Body中提取，cookie-从Cookie中提取，header-从HTTP Header中提取
入参限制：必填，取值范围为get/post/cookie/header
     * @param string $Category 提取类别
取值说明：location-按位置提取（使用StartOffset和EndOffset），match-按字符串匹配提取（使用KeyOrStartMat和EndMat），exact_key-按精准Key提取（使用Key字段）
入参限制：必填，取值范围为location/match/exact_key
     * @param string $KeyOrStartMat 提取key或者起始匹配模式
入参限制：最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的起始字符串；当Category为exact_key时，表示精确匹配的key名
     * @param string $EndMat 结束匹配模式
入参限制：必填，最长32个字符，不允许包含MongoDB注入字符
说明：当Category为match时，表示匹配的结束字符串
     * @param string $StartOffset 起始偏移位置
入参限制：必填，整数字符串
约束条件：EndOffset不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的起始字节位置
     * @param string $EndOffset 结束偏移位置
入参限制：必填，整数字符串
约束条件：不能小于StartOffset，且EndOffset-StartOffset+1不能超过256
说明：当Category为location时生效，表示从会话值中提取的结束字节位置
     * @param string $Edition 版本
     * @param string $SessionName 会话名称
说明：用于标识会话的可读名称
     * @param integer $SessionID 会话ID
说明：传-1表示新增会话（系统自动生成ID），传已有ID表示更新该会话配置
约束条件：新增时每个域名最多10条会话规则
     * @param string $Key 会话标识参数（精准匹配key）
入参限制：key中"."分隔的层级不超过2层
说明：当Category为exact_key时使用，表示要精确匹配的参数名
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

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("KeyOrStartMat",$param) and $param["KeyOrStartMat"] !== null) {
            $this->KeyOrStartMat = $param["KeyOrStartMat"];
        }

        if (array_key_exists("EndMat",$param) and $param["EndMat"] !== null) {
            $this->EndMat = $param["EndMat"];
        }

        if (array_key_exists("StartOffset",$param) and $param["StartOffset"] !== null) {
            $this->StartOffset = $param["StartOffset"];
        }

        if (array_key_exists("EndOffset",$param) and $param["EndOffset"] !== null) {
            $this->EndOffset = $param["EndOffset"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("SessionName",$param) and $param["SessionName"] !== null) {
            $this->SessionName = $param["SessionName"];
        }

        if (array_key_exists("SessionID",$param) and $param["SessionID"] !== null) {
            $this->SessionID = $param["SessionID"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
