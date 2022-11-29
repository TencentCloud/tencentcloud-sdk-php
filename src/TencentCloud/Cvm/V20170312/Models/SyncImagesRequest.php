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
 * SyncImages请求参数结构体
 *
 * @method array getImageIds() 获取镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。<br><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。<br>镜像ID必须满足限制：<br><li>镜像ID对应的镜像状态必须为`NORMAL`。<br>镜像状态请参考[镜像数据表](https://cloud.tencent.com/document/product/213/15753#Image)。
 * @method void setImageIds(array $ImageIds) 设置镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。<br><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。<br>镜像ID必须满足限制：<br><li>镜像ID对应的镜像状态必须为`NORMAL`。<br>镜像状态请参考[镜像数据表](https://cloud.tencent.com/document/product/213/15753#Image)。
 * @method array getDestinationRegions() 获取目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。<br><li>如果是自定义镜像，则目标同步地域不能为源地域。<br><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。<br><li>暂不支持部分地域同步。<br>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
 * @method void setDestinationRegions(array $DestinationRegions) 设置目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。<br><li>如果是自定义镜像，则目标同步地域不能为源地域。<br><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。<br><li>暂不支持部分地域同步。<br>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
 * @method boolean getDryRun() 获取检测是否支持发起同步镜像。
 * @method void setDryRun(boolean $DryRun) 设置检测是否支持发起同步镜像。
 * @method string getImageName() 获取目标镜像名称。
 * @method void setImageName(string $ImageName) 设置目标镜像名称。
 * @method boolean getImageSetRequired() 获取是否需要返回目的地域的镜像ID。
 * @method void setImageSetRequired(boolean $ImageSetRequired) 设置是否需要返回目的地域的镜像ID。
 */
class SyncImagesRequest extends AbstractModel
{
    /**
     * @var array 镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。<br><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。<br>镜像ID必须满足限制：<br><li>镜像ID对应的镜像状态必须为`NORMAL`。<br>镜像状态请参考[镜像数据表](https://cloud.tencent.com/document/product/213/15753#Image)。
     */
    public $ImageIds;

    /**
     * @var array 目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。<br><li>如果是自定义镜像，则目标同步地域不能为源地域。<br><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。<br><li>暂不支持部分地域同步。<br>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
     */
    public $DestinationRegions;

    /**
     * @var boolean 检测是否支持发起同步镜像。
     */
    public $DryRun;

    /**
     * @var string 目标镜像名称。
     */
    public $ImageName;

    /**
     * @var boolean 是否需要返回目的地域的镜像ID。
     */
    public $ImageSetRequired;

    /**
     * @param array $ImageIds 镜像ID列表 ，镜像ID可以通过如下方式获取：<br><li>通过[DescribeImages](https://cloud.tencent.com/document/api/213/15715)接口返回的`ImageId`获取。<br><li>通过[镜像控制台](https://console.cloud.tencent.com/cvm/image)获取。<br>镜像ID必须满足限制：<br><li>镜像ID对应的镜像状态必须为`NORMAL`。<br>镜像状态请参考[镜像数据表](https://cloud.tencent.com/document/product/213/15753#Image)。
     * @param array $DestinationRegions 目的同步地域列表，必须满足如下限制：<br><li>必须是一个合法的Region。<br><li>如果是自定义镜像，则目标同步地域不能为源地域。<br><li>如果是共享镜像，则目的同步地域仅支持源地域，表示将共享镜像复制为源地域的自定义镜像。<br><li>暂不支持部分地域同步。<br>具体地域参数请参考[Region](https://cloud.tencent.com/document/product/213/6091)。
     * @param boolean $DryRun 检测是否支持发起同步镜像。
     * @param string $ImageName 目标镜像名称。
     * @param boolean $ImageSetRequired 是否需要返回目的地域的镜像ID。
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("DestinationRegions",$param) and $param["DestinationRegions"] !== null) {
            $this->DestinationRegions = $param["DestinationRegions"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageSetRequired",$param) and $param["ImageSetRequired"] !== null) {
            $this->ImageSetRequired = $param["ImageSetRequired"];
        }
    }
}
