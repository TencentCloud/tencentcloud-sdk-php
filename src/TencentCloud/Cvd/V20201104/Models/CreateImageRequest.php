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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImage请求参数结构体
 *
 * @method string getInstanceId() 获取<p>云桌面实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云桌面实例ID。</p>
 * @method string getImageName() 获取<p>镜像名称。只支持中文、字母、数字或连接符号&quot;-&quot;，且最多60个字符。<br>默认值：空。</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名称。只支持中文、字母、数字或连接符号&quot;-&quot;，且最多60个字符。<br>默认值：空。</p>
 * @method string getDescription() 获取<p>镜像的描述信息。支持英文或中文字符，最多60个字符。<br>默认值：空。</p>
 * @method void setDescription(string $Description) 设置<p>镜像的描述信息。支持英文或中文字符，最多60个字符。<br>默认值：空。</p>
 * @method array getDataDiskIds() 获取<p>基于实例创建整机镜像时，指定包含在镜像里的数据盘ID。</p>
 * @method void setDataDiskIds(array $DataDiskIds) 设置<p>基于实例创建整机镜像时，指定包含在镜像里的数据盘ID。</p>
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string <p>云桌面实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>镜像名称。只支持中文、字母、数字或连接符号&quot;-&quot;，且最多60个字符。<br>默认值：空。</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像的描述信息。支持英文或中文字符，最多60个字符。<br>默认值：空。</p>
     */
    public $Description;

    /**
     * @var array <p>基于实例创建整机镜像时，指定包含在镜像里的数据盘ID。</p>
     */
    public $DataDiskIds;

    /**
     * @param string $InstanceId <p>云桌面实例ID。</p>
     * @param string $ImageName <p>镜像名称。只支持中文、字母、数字或连接符号&quot;-&quot;，且最多60个字符。<br>默认值：空。</p>
     * @param string $Description <p>镜像的描述信息。支持英文或中文字符，最多60个字符。<br>默认值：空。</p>
     * @param array $DataDiskIds <p>基于实例创建整机镜像时，指定包含在镜像里的数据盘ID。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DataDiskIds",$param) and $param["DataDiskIds"] !== null) {
            $this->DataDiskIds = $param["DataDiskIds"];
        }
    }
}
