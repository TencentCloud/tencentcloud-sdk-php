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
 * 报表嵌出数据结构-强鉴权
 *
 * @method integer getId() 获取信息标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置信息标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBIToken() 获取令牌
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBIToken(string $BIToken) 设置令牌
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPageId() 获取页面Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageId(string $PageId) 设置页面Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraParam() 获取备用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraParam(string $ExtraParam) 设置备用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScope() 获取嵌出类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(string $Scope) 设置嵌出类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取过期时间，分钟为单位，最大240
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间，分钟为单位，最大240
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserCorpId() 获取使用者企业Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserCorpId(string $UserCorpId) 设置使用者企业Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取使用者Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置使用者Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTicketNum() 获取访问次数限制，限制范围1-99999，为空则不设置访问次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTicketNum(integer $TicketNum) 设置访问次数限制，限制范围1-99999，为空则不设置访问次数限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalParam() 获取全局参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalParam(string $GlobalParam) 设置全局参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntention() 获取embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntention(string $Intention) 设置embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenType() 获取100 无绑定用户
200 单用户单token
300 单用户 多token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenType(integer $TokenType) 设置100 无绑定用户
200 单用户单token
300 单用户 多token
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenNum() 获取token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenNum(integer $TokenNum) 设置token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSingleUserMultiToken() 获取是否单用户多token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingleUserMultiToken(boolean $SingleUserMultiToken) 设置是否单用户多token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigParam() 获取嵌出显示配置，目前为ChatBI嵌出场景用，TableFilter表示数据表列表过滤，SqlView表示sql查看功能
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigParam(string $ConfigParam) 设置嵌出显示配置，目前为ChatBI嵌出场景用，TableFilter表示数据表列表过滤，SqlView表示sql查看功能
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmbedTokenInfo extends AbstractModel
{
    /**
     * @var integer 信息标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 令牌
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BIToken;

    /**
     * @var string 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 页面Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageId;

    /**
     * @var string 备用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraParam;

    /**
     * @var string 嵌出类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var integer 过期时间，分钟为单位，最大240
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 使用者企业Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserCorpId;

    /**
     * @var string 使用者Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var integer 访问次数限制，限制范围1-99999，为空则不设置访问次数限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TicketNum;

    /**
     * @var string 全局参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalParam;

    /**
     * @var string embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Intention;

    /**
     * @var integer 100 无绑定用户
200 单用户单token
300 单用户 多token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenType;

    /**
     * @var integer token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenNum;

    /**
     * @var boolean 是否单用户多token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SingleUserMultiToken;

    /**
     * @var string 嵌出显示配置，目前为ChatBI嵌出场景用，TableFilter表示数据表列表过滤，SqlView表示sql查看功能
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigParam;

    /**
     * @param integer $Id 信息标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BIToken 令牌
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser 更新人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PageId 页面Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraParam 备用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scope 嵌出类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 过期时间，分钟为单位，最大240
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserCorpId 使用者企业Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 使用者Id(仅用于多用户)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TicketNum 访问次数限制，限制范围1-99999，为空则不设置访问次数限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalParam 全局参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Intention embed表示页面看板嵌出，chatBIEmbed表示ChatBI嵌出
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenType 100 无绑定用户
200 单用户单token
300 单用户 多token
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenNum token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SingleUserMultiToken 是否单用户多token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigParam 嵌出显示配置，目前为ChatBI嵌出场景用，TableFilter表示数据表列表过滤，SqlView表示sql查看功能
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BIToken",$param) and $param["BIToken"] !== null) {
            $this->BIToken = $param["BIToken"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
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

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = $param["Intention"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("TokenNum",$param) and $param["TokenNum"] !== null) {
            $this->TokenNum = $param["TokenNum"];
        }

        if (array_key_exists("SingleUserMultiToken",$param) and $param["SingleUserMultiToken"] !== null) {
            $this->SingleUserMultiToken = $param["SingleUserMultiToken"];
        }

        if (array_key_exists("ConfigParam",$param) and $param["ConfigParam"] !== null) {
            $this->ConfigParam = $param["ConfigParam"];
        }
    }
}
