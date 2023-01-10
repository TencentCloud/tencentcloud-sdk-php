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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群存储选项概览信息。
 *
 * @method array getCFSOptions() 获取CFS存储选项概览信息列表。
 * @method void setCFSOptions(array $CFSOptions) 设置CFS存储选项概览信息列表。
 * @method array getGooseFSOptions() 获取GooseFS存储选项概览信息列表。
 * @method void setGooseFSOptions(array $GooseFSOptions) 设置GooseFS存储选项概览信息列表。
 */
class StorageOptionOverview extends AbstractModel
{
    /**
     * @var array CFS存储选项概览信息列表。
     */
    public $CFSOptions;

    /**
     * @var array GooseFS存储选项概览信息列表。
     */
    public $GooseFSOptions;

    /**
     * @param array $CFSOptions CFS存储选项概览信息列表。
     * @param array $GooseFSOptions GooseFS存储选项概览信息列表。
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
        if (array_key_exists("CFSOptions",$param) and $param["CFSOptions"] !== null) {
            $this->CFSOptions = [];
            foreach ($param["CFSOptions"] as $key => $value){
                $obj = new CFSOptionOverview();
                $obj->deserialize($value);
                array_push($this->CFSOptions, $obj);
            }
        }

        if (array_key_exists("GooseFSOptions",$param) and $param["GooseFSOptions"] !== null) {
            $this->GooseFSOptions = [];
            foreach ($param["GooseFSOptions"] as $key => $value){
                $obj = new GooseFSOptionOverview();
                $obj->deserialize($value);
                array_push($this->GooseFSOptions, $obj);
            }
        }
    }
}
