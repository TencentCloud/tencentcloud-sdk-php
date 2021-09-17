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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEKSContainerInstances请求参数结构体
 *
 * @method array getEksCiIds() 获取需要删除的EksCi的Id。 最大数量不超过20
 * @method void setEksCiIds(array $EksCiIds) 设置需要删除的EksCi的Id。 最大数量不超过20
 * @method boolean getReleaseAutoCreatedEip() 获取是否释放为EksCi自动创建的Eip
 * @method void setReleaseAutoCreatedEip(boolean $ReleaseAutoCreatedEip) 设置是否释放为EksCi自动创建的Eip
 */
class DeleteEKSContainerInstancesRequest extends AbstractModel
{
    /**
     * @var array 需要删除的EksCi的Id。 最大数量不超过20
     */
    public $EksCiIds;

    /**
     * @var boolean 是否释放为EksCi自动创建的Eip
     */
    public $ReleaseAutoCreatedEip;

    /**
     * @param array $EksCiIds 需要删除的EksCi的Id。 最大数量不超过20
     * @param boolean $ReleaseAutoCreatedEip 是否释放为EksCi自动创建的Eip
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
        if (array_key_exists("EksCiIds",$param) and $param["EksCiIds"] !== null) {
            $this->EksCiIds = $param["EksCiIds"];
        }

        if (array_key_exists("ReleaseAutoCreatedEip",$param) and $param["ReleaseAutoCreatedEip"] !== null) {
            $this->ReleaseAutoCreatedEip = $param["ReleaseAutoCreatedEip"];
        }
    }
}
