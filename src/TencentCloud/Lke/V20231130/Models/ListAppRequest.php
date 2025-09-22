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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListApp请求参数结构体
 *
 * @method string getAppType() 获取应用类型；knowledge_qa - 知识问答管理 
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa - 知识问答管理 
 * @method integer getPageSize() 获取每页数目，整型
 * @method void setPageSize(integer $PageSize) 设置每页数目，整型
 * @method integer getPageNumber() 获取页码，整型
 * @method void setPageNumber(integer $PageNumber) 设置页码，整型
 * @method string getKeyword() 获取关键词：应用/修改人
 * @method void setKeyword(string $Keyword) 设置关键词：应用/修改人
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)	
 * @method string getAgentType() 获取智能体类型 dialogue：对话智能体，wechat：公众号智能体
 * @method void setAgentType(string $AgentType) 设置智能体类型 dialogue：对话智能体，wechat：公众号智能体
 * @method string getAppStatus() 获取应用状态 1:未上线   2：运行中
 * @method void setAppStatus(string $AppStatus) 设置应用状态 1:未上线   2：运行中
 */
class ListAppRequest extends AbstractModel
{
    /**
     * @var string 应用类型；knowledge_qa - 知识问答管理 
     */
    public $AppType;

    /**
     * @var integer 每页数目，整型
     */
    public $PageSize;

    /**
     * @var integer 页码，整型
     */
    public $PageNumber;

    /**
     * @var string 关键词：应用/修改人
     */
    public $Keyword;

    /**
     * @var string 登录用户子账号(集成商模式必填)	
     */
    public $LoginSubAccountUin;

    /**
     * @var string 智能体类型 dialogue：对话智能体，wechat：公众号智能体
     */
    public $AgentType;

    /**
     * @var string 应用状态 1:未上线   2：运行中
     */
    public $AppStatus;

    /**
     * @param string $AppType 应用类型；knowledge_qa - 知识问答管理 
     * @param integer $PageSize 每页数目，整型
     * @param integer $PageNumber 页码，整型
     * @param string $Keyword 关键词：应用/修改人
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)	
     * @param string $AgentType 智能体类型 dialogue：对话智能体，wechat：公众号智能体
     * @param string $AppStatus 应用状态 1:未上线   2：运行中
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }
    }
}
