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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享资源
 *
 * @method string getResourceId() 获取共享资源ID。
 * @method void setResourceId(string $ResourceId) 设置共享资源ID。
 * @method string getProductResourceId() 获取产品资源ID。
 * @method void setProductResourceId(string $ProductResourceId) 设置产品资源ID。
 */
class ShareResource extends AbstractModel
{
    /**
     * @var string 共享资源ID。
     * @deprecated
     */
    public $ResourceId;

    /**
     * @var string 产品资源ID。
     */
    public $ProductResourceId;

    /**
     * @param string $ResourceId 共享资源ID。
     * @param string $ProductResourceId 产品资源ID。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ProductResourceId",$param) and $param["ProductResourceId"] !== null) {
            $this->ProductResourceId = $param["ProductResourceId"];
        }
    }
}
