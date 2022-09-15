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
 * ApplyEmbedInterval请求参数结构体
 *
 * @method integer getProjectId() 获取分享项目id，必选
 * @method void setProjectId(integer $ProjectId) 设置分享项目id，必选
 * @method integer getPageId() 获取分享页面id，嵌出看板时此为空值0
 * @method void setPageId(integer $PageId) 设置分享页面id，嵌出看板时此为空值0
 * @method string getBIToken() 获取需要申请延期的Token
 * @method void setBIToken(string $BIToken) 设置需要申请延期的Token
 * @method string getExtraParam() 获取备用字段
 * @method void setExtraParam(string $ExtraParam) 设置备用字段
 * @method string getScope() 获取panel,看板；page，页面
 * @method void setScope(string $Scope) 设置panel,看板；page，页面
 */
class ApplyEmbedIntervalRequest extends AbstractModel
{
    /**
     * @var integer 分享项目id，必选
     */
    public $ProjectId;

    /**
     * @var integer 分享页面id，嵌出看板时此为空值0
     */
    public $PageId;

    /**
     * @var string 需要申请延期的Token
     */
    public $BIToken;

    /**
     * @var string 备用字段
     */
    public $ExtraParam;

    /**
     * @var string panel,看板；page，页面
     */
    public $Scope;

    /**
     * @param integer $ProjectId 分享项目id，必选
     * @param integer $PageId 分享页面id，嵌出看板时此为空值0
     * @param string $BIToken 需要申请延期的Token
     * @param string $ExtraParam 备用字段
     * @param string $Scope panel,看板；page，页面
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

        if (array_key_exists("BIToken",$param) and $param["BIToken"] !== null) {
            $this->BIToken = $param["BIToken"];
        }

        if (array_key_exists("ExtraParam",$param) and $param["ExtraParam"] !== null) {
            $this->ExtraParam = $param["ExtraParam"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
