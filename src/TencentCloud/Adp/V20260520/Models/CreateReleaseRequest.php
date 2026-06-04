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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRelease请求参数结构体
 *
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 * @method array getChannelIdList() 获取渠道ID列表
 * @method void setChannelIdList(array $ChannelIdList) 设置渠道ID列表
 * @method string getDescription() 获取发布描述
 * @method void setDescription(string $Description) 设置发布描述
 * @method boolean getIsDevToRelease() 获取将默认知识库中，仅调试生效的知识批量变更为"调试/发布都生效"
 * @method void setIsDevToRelease(boolean $IsDevToRelease) 设置将默认知识库中，仅调试生效的知识批量变更为"调试/发布都生效"
 * @method boolean getIsPublishAsTemplate() 获取是否同步发布为应用模板
 * @method void setIsPublishAsTemplate(boolean $IsPublishAsTemplate) 设置是否同步发布为应用模板
 */
class CreateReleaseRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @var array 渠道ID列表
     */
    public $ChannelIdList;

    /**
     * @var string 发布描述
     */
    public $Description;

    /**
     * @var boolean 将默认知识库中，仅调试生效的知识批量变更为"调试/发布都生效"
     */
    public $IsDevToRelease;

    /**
     * @var boolean 是否同步发布为应用模板
     */
    public $IsPublishAsTemplate;

    /**
     * @param string $AppId 应用ID
     * @param array $ChannelIdList 渠道ID列表
     * @param string $Description 发布描述
     * @param boolean $IsDevToRelease 将默认知识库中，仅调试生效的知识批量变更为"调试/发布都生效"
     * @param boolean $IsPublishAsTemplate 是否同步发布为应用模板
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ChannelIdList",$param) and $param["ChannelIdList"] !== null) {
            $this->ChannelIdList = $param["ChannelIdList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsDevToRelease",$param) and $param["IsDevToRelease"] !== null) {
            $this->IsDevToRelease = $param["IsDevToRelease"];
        }

        if (array_key_exists("IsPublishAsTemplate",$param) and $param["IsPublishAsTemplate"] !== null) {
            $this->IsPublishAsTemplate = $param["IsPublishAsTemplate"];
        }
    }
}
