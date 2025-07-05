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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteImages请求参数结构体
 *
 * @method array getImageIds() 获取删除的镜像 ID 列表。
可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回值中的`ImageId`获取。
 * @method void setImageIds(array $ImageIds) 设置删除的镜像 ID 列表。
可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回值中的`ImageId`获取。
 * @method boolean getDeleteBindedSnap() 获取是否删除镜像关联的快照。
默认值：false
 * @method void setDeleteBindedSnap(boolean $DeleteBindedSnap) 设置是否删除镜像关联的快照。
默认值：false
 * @method boolean getDryRun() 获取检测是否支持删除镜像。
默认值：false
 * @method void setDryRun(boolean $DryRun) 设置检测是否支持删除镜像。
默认值：false
 */
class DeleteImagesRequest extends AbstractModel
{
    /**
     * @var array 删除的镜像 ID 列表。
可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回值中的`ImageId`获取。
     */
    public $ImageIds;

    /**
     * @var boolean 是否删除镜像关联的快照。
默认值：false
     */
    public $DeleteBindedSnap;

    /**
     * @var boolean 检测是否支持删除镜像。
默认值：false
     */
    public $DryRun;

    /**
     * @param array $ImageIds 删除的镜像 ID 列表。
可通过 [DescribeImages](https://cloud.tencent.com/document/api/213/15715) 接口返回值中的`ImageId`获取。
     * @param boolean $DeleteBindedSnap 是否删除镜像关联的快照。
默认值：false
     * @param boolean $DryRun 检测是否支持删除镜像。
默认值：false
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

        if (array_key_exists("DeleteBindedSnap",$param) and $param["DeleteBindedSnap"] !== null) {
            $this->DeleteBindedSnap = $param["DeleteBindedSnap"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
