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
 * ModifyApp请求参数结构体
 *
 * @method string getAppBizId() 获取应用 ID
 * @method void setAppBizId(string $AppBizId) 设置应用 ID
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method BaseConfig getBaseConfig() 获取应用基础配置
 * @method void setBaseConfig(BaseConfig $BaseConfig) 设置应用基础配置
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)	
 * @method AppConfig getAppConfig() 获取应用配置
 * @method void setAppConfig(AppConfig $AppConfig) 设置应用配置
 */
class ModifyAppRequest extends AbstractModel
{
    /**
     * @var string 应用 ID
     */
    public $AppBizId;

    /**
     * @var string 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     */
    public $AppType;

    /**
     * @var BaseConfig 应用基础配置
     */
    public $BaseConfig;

    /**
     * @var string 登录用户子账号(集成商模式必填)	
     */
    public $LoginSubAccountUin;

    /**
     * @var AppConfig 应用配置
     */
    public $AppConfig;

    /**
     * @param string $AppBizId 应用 ID
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     * @param BaseConfig $BaseConfig 应用基础配置
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)	
     * @param AppConfig $AppConfig 应用配置
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("BaseConfig",$param) and $param["BaseConfig"] !== null) {
            $this->BaseConfig = new BaseConfig();
            $this->BaseConfig->deserialize($param["BaseConfig"]);
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("AppConfig",$param) and $param["AppConfig"] !== null) {
            $this->AppConfig = new AppConfig();
            $this->AppConfig->deserialize($param["AppConfig"]);
        }
    }
}
