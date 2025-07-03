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
 * ModifyImageAttribute请求参数结构体
 *
 * @method string getImageId() 获取镜像ID，形如`img-gvbnzy6f`。镜像ID可以通过如下方式获取：<li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method void setImageId(string $ImageId) 设置镜像ID，形如`img-gvbnzy6f`。镜像ID可以通过如下方式获取：<li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
 * @method string getImageName() 获取设置新的镜像名称；必须满足下列限制 <li> 不得超过60个字符。</li><li> 镜像名称不能与已有镜像重复。</li>
 * @method void setImageName(string $ImageName) 设置设置新的镜像名称；必须满足下列限制 <li> 不得超过60个字符。</li><li> 镜像名称不能与已有镜像重复。</li>
 * @method string getImageDescription() 获取设置新的镜像描述；必须满足下列限制： <li> 不得超过 256 个字符。</li>
 * @method void setImageDescription(string $ImageDescription) 设置设置新的镜像描述；必须满足下列限制： <li> 不得超过 256 个字符。</li>
 * @method string getImageFamily() 获取设置镜像族；
 * @method void setImageFamily(string $ImageFamily) 设置设置镜像族；
 * @method boolean getImageDeprecated() 获取设置镜像是否废弃；
 * @method void setImageDeprecated(boolean $ImageDeprecated) 设置设置镜像是否废弃；
 */
class ModifyImageAttributeRequest extends AbstractModel
{
    /**
     * @var string 镜像ID，形如`img-gvbnzy6f`。镜像ID可以通过如下方式获取：<li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     */
    public $ImageId;

    /**
     * @var string 设置新的镜像名称；必须满足下列限制 <li> 不得超过60个字符。</li><li> 镜像名称不能与已有镜像重复。</li>
     */
    public $ImageName;

    /**
     * @var string 设置新的镜像描述；必须满足下列限制： <li> 不得超过 256 个字符。</li>
     */
    public $ImageDescription;

    /**
     * @var string 设置镜像族；
     */
    public $ImageFamily;

    /**
     * @var boolean 设置镜像是否废弃；
     */
    public $ImageDeprecated;

    /**
     * @param string $ImageId 镜像ID，形如`img-gvbnzy6f`。镜像ID可以通过如下方式获取：<li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。</li><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。</li>
     * @param string $ImageName 设置新的镜像名称；必须满足下列限制 <li> 不得超过60个字符。</li><li> 镜像名称不能与已有镜像重复。</li>
     * @param string $ImageDescription 设置新的镜像描述；必须满足下列限制： <li> 不得超过 256 个字符。</li>
     * @param string $ImageFamily 设置镜像族；
     * @param boolean $ImageDeprecated 设置镜像是否废弃；
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("ImageDeprecated",$param) and $param["ImageDeprecated"] !== null) {
            $this->ImageDeprecated = $param["ImageDeprecated"];
        }
    }
}
