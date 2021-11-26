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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportMediaToProject请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method string getProjectId() 获取项目 Id。
 * @method void setProjectId(string $ProjectId) 设置项目 Id。
 * @method string getSourceType() 获取导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>

注意：如果不填默认为云点播文件，如果媒体存储在非腾讯云点播中，都需要使用媒资绑定。
 * @method void setSourceType(string $SourceType) 设置导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>

注意：如果不填默认为云点播文件，如果媒体存储在非腾讯云点播中，都需要使用媒资绑定。
 * @method string getVodFileId() 获取云点播媒资文件 Id，当 SourceType 取值 VOD 或者缺省的时候必填。
 * @method void setVodFileId(string $VodFileId) 设置云点播媒资文件 Id，当 SourceType 取值 VOD 或者缺省的时候必填。
 * @method ExternalMediaInfo getExternalMediaInfo() 获取原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
 * @method void setExternalMediaInfo(ExternalMediaInfo $ExternalMediaInfo) 设置原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
 * @method string getName() 获取媒体名称，不能超过30个字符。如果不填，则媒体名称为点播媒资文件名称。
 * @method void setName(string $Name) 设置媒体名称，不能超过30个字符。如果不填，则媒体名称为点播媒资文件名称。
 * @method integer getPreProcessDefinition() 获取媒体预处理配置 ID，取值：
<li>10：进行视频编辑预处理。</li>

注意：如果填0或者不填则不进行处理，如果原始视频不可在浏览器直接播放将无法在编辑页面编辑。
 * @method void setPreProcessDefinition(integer $PreProcessDefinition) 设置媒体预处理配置 ID，取值：
<li>10：进行视频编辑预处理。</li>

注意：如果填0或者不填则不进行处理，如果原始视频不可在浏览器直接播放将无法在编辑页面编辑。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以向所有视频编辑项目导入媒体；如果指定操作者，则操作者必须为项目所有者。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以向所有视频编辑项目导入媒体；如果指定操作者，则操作者必须为项目所有者。
 */
class ImportMediaToProjectRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var string 项目 Id。
     */
    public $ProjectId;

    /**
     * @var string 导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>

注意：如果不填默认为云点播文件，如果媒体存储在非腾讯云点播中，都需要使用媒资绑定。
     */
    public $SourceType;

    /**
     * @var string 云点播媒资文件 Id，当 SourceType 取值 VOD 或者缺省的时候必填。
     */
    public $VodFileId;

    /**
     * @var ExternalMediaInfo 原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
     */
    public $ExternalMediaInfo;

    /**
     * @var string 媒体名称，不能超过30个字符。如果不填，则媒体名称为点播媒资文件名称。
     */
    public $Name;

    /**
     * @var integer 媒体预处理配置 ID，取值：
<li>10：进行视频编辑预处理。</li>

注意：如果填0或者不填则不进行处理，如果原始视频不可在浏览器直接播放将无法在编辑页面编辑。
     */
    public $PreProcessDefinition;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以向所有视频编辑项目导入媒体；如果指定操作者，则操作者必须为项目所有者。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param string $ProjectId 项目 Id。
     * @param string $SourceType 导入媒资类型，取值：
<li>VOD：云点播文件；</li>
<li>EXTERNAL：媒资绑定。</li>

注意：如果不填默认为云点播文件，如果媒体存储在非腾讯云点播中，都需要使用媒资绑定。
     * @param string $VodFileId 云点播媒资文件 Id，当 SourceType 取值 VOD 或者缺省的时候必填。
     * @param ExternalMediaInfo $ExternalMediaInfo 原始媒资文件信息，当 SourceType 取值 EXTERNAL 的时候必填。
     * @param string $Name 媒体名称，不能超过30个字符。如果不填，则媒体名称为点播媒资文件名称。
     * @param integer $PreProcessDefinition 媒体预处理配置 ID，取值：
<li>10：进行视频编辑预处理。</li>

注意：如果填0或者不填则不进行处理，如果原始视频不可在浏览器直接播放将无法在编辑页面编辑。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以向所有视频编辑项目导入媒体；如果指定操作者，则操作者必须为项目所有者。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("VodFileId",$param) and $param["VodFileId"] !== null) {
            $this->VodFileId = $param["VodFileId"];
        }

        if (array_key_exists("ExternalMediaInfo",$param) and $param["ExternalMediaInfo"] !== null) {
            $this->ExternalMediaInfo = new ExternalMediaInfo();
            $this->ExternalMediaInfo->deserialize($param["ExternalMediaInfo"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PreProcessDefinition",$param) and $param["PreProcessDefinition"] !== null) {
            $this->PreProcessDefinition = $param["PreProcessDefinition"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
