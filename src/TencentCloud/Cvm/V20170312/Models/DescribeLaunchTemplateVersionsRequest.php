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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaunchTemplateVersions请求参数结构体
 *
 * @method string getLaunchTemplateId() 获取启动模板ID。
 * @method void setLaunchTemplateId(string $LaunchTemplateId) 设置启动模板ID。
 * @method array getLaunchTemplateVersions() 获取实例启动模板列表。
 * @method void setLaunchTemplateVersions(array $LaunchTemplateVersions) 设置实例启动模板列表。
 * @method integer getMinVersion() 获取通过范围指定版本时的最小版本号，默认为0。
 * @method void setMinVersion(integer $MinVersion) 设置通过范围指定版本时的最小版本号，默认为0。
 * @method integer getMaxVersion() 获取过范围指定版本时的最大版本号，默认为30。
 * @method void setMaxVersion(integer $MaxVersion) 设置过范围指定版本时的最大版本号，默认为30。
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method boolean getDefaultVersion() 获取是否查询默认版本。该参数不可与LaunchTemplateVersions同时指定。
 * @method void setDefaultVersion(boolean $DefaultVersion) 设置是否查询默认版本。该参数不可与LaunchTemplateVersions同时指定。
 */
class DescribeLaunchTemplateVersionsRequest extends AbstractModel
{
    /**
     * @var string 启动模板ID。
     */
    public $LaunchTemplateId;

    /**
     * @var array 实例启动模板列表。
     */
    public $LaunchTemplateVersions;

    /**
     * @var integer 通过范围指定版本时的最小版本号，默认为0。
     */
    public $MinVersion;

    /**
     * @var integer 过范围指定版本时的最大版本号，默认为30。
     */
    public $MaxVersion;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var boolean 是否查询默认版本。该参数不可与LaunchTemplateVersions同时指定。
     */
    public $DefaultVersion;

    /**
     * @param string $LaunchTemplateId 启动模板ID。
     * @param array $LaunchTemplateVersions 实例启动模板列表。
     * @param integer $MinVersion 通过范围指定版本时的最小版本号，默认为0。
     * @param integer $MaxVersion 过范围指定版本时的最大版本号，默认为30。
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param boolean $DefaultVersion 是否查询默认版本。该参数不可与LaunchTemplateVersions同时指定。
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
        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersions",$param) and $param["LaunchTemplateVersions"] !== null) {
            $this->LaunchTemplateVersions = $param["LaunchTemplateVersions"];
        }

        if (array_key_exists("MinVersion",$param) and $param["MinVersion"] !== null) {
            $this->MinVersion = $param["MinVersion"];
        }

        if (array_key_exists("MaxVersion",$param) and $param["MaxVersion"] !== null) {
            $this->MaxVersion = $param["MaxVersion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }
    }
}
