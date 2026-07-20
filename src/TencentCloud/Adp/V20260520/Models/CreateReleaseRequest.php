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
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method AppShareAccessControl getAppShareAccessControl() 获取<p>应用分享访问控制配置</p>
 * @method void setAppShareAccessControl(AppShareAccessControl $AppShareAccessControl) 设置<p>应用分享访问控制配置</p>
 * @method array getChannelIdList() 获取<p>渠道ID列表</p>
 * @method void setChannelIdList(array $ChannelIdList) 设置<p>渠道ID列表</p>
 * @method CorpShareConfig getCorpShareConfig() 获取<p>企业共享配置</p>
 * @method void setCorpShareConfig(CorpShareConfig $CorpShareConfig) 设置<p>企业共享配置</p>
 * @method string getDescription() 获取<p>发布描述</p>
 * @method void setDescription(string $Description) 设置<p>发布描述</p>
 * @method boolean getIsDevToRelease() 获取<p>将默认知识库中，仅调试生效的知识批量变更为&quot;调试/发布都生效&quot;</p>
 * @method void setIsDevToRelease(boolean $IsDevToRelease) 设置<p>将默认知识库中，仅调试生效的知识批量变更为&quot;调试/发布都生效&quot;</p>
 * @method boolean getIsPublishAsTemplate() 获取<p>是否同步发布为应用模板</p>
 * @method void setIsPublishAsTemplate(boolean $IsPublishAsTemplate) 设置<p>是否同步发布为应用模板</p>
 */
class CreateReleaseRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var AppShareAccessControl <p>应用分享访问控制配置</p>
     */
    public $AppShareAccessControl;

    /**
     * @var array <p>渠道ID列表</p>
     */
    public $ChannelIdList;

    /**
     * @var CorpShareConfig <p>企业共享配置</p>
     */
    public $CorpShareConfig;

    /**
     * @var string <p>发布描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>将默认知识库中，仅调试生效的知识批量变更为&quot;调试/发布都生效&quot;</p>
     */
    public $IsDevToRelease;

    /**
     * @var boolean <p>是否同步发布为应用模板</p>
     */
    public $IsPublishAsTemplate;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param AppShareAccessControl $AppShareAccessControl <p>应用分享访问控制配置</p>
     * @param array $ChannelIdList <p>渠道ID列表</p>
     * @param CorpShareConfig $CorpShareConfig <p>企业共享配置</p>
     * @param string $Description <p>发布描述</p>
     * @param boolean $IsDevToRelease <p>将默认知识库中，仅调试生效的知识批量变更为&quot;调试/发布都生效&quot;</p>
     * @param boolean $IsPublishAsTemplate <p>是否同步发布为应用模板</p>
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

        if (array_key_exists("AppShareAccessControl",$param) and $param["AppShareAccessControl"] !== null) {
            $this->AppShareAccessControl = new AppShareAccessControl();
            $this->AppShareAccessControl->deserialize($param["AppShareAccessControl"]);
        }

        if (array_key_exists("ChannelIdList",$param) and $param["ChannelIdList"] !== null) {
            $this->ChannelIdList = $param["ChannelIdList"];
        }

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new CorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
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
