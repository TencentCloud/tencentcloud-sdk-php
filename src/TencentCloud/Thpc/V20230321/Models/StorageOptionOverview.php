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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群存储选项概览信息。
 *
 * @method array getCFSOptions() 获取<p>CFS存储选项概览信息列表。</p>
 * @method void setCFSOptions(array $CFSOptions) 设置<p>CFS存储选项概览信息列表。</p>
 * @method array getGooseFSOptions() 获取<p>GooseFS存储选项概览信息列表。</p>
 * @method void setGooseFSOptions(array $GooseFSOptions) 设置<p>GooseFS存储选项概览信息列表。</p>
 * @method array getGooseFSxOptions() 获取<p>GooseFSx存储选项概览信息列表。</p>
 * @method void setGooseFSxOptions(array $GooseFSxOptions) 设置<p>GooseFSx存储选项概览信息列表。</p>
 * @method array getCosOptions() 获取<p>COS存储选项概览信息列表。</p>
 * @method void setCosOptions(array $CosOptions) 设置<p>COS存储选项概览信息列表。</p>
 */
class StorageOptionOverview extends AbstractModel
{
    /**
     * @var array <p>CFS存储选项概览信息列表。</p>
     */
    public $CFSOptions;

    /**
     * @var array <p>GooseFS存储选项概览信息列表。</p>
     */
    public $GooseFSOptions;

    /**
     * @var array <p>GooseFSx存储选项概览信息列表。</p>
     */
    public $GooseFSxOptions;

    /**
     * @var array <p>COS存储选项概览信息列表。</p>
     */
    public $CosOptions;

    /**
     * @param array $CFSOptions <p>CFS存储选项概览信息列表。</p>
     * @param array $GooseFSOptions <p>GooseFS存储选项概览信息列表。</p>
     * @param array $GooseFSxOptions <p>GooseFSx存储选项概览信息列表。</p>
     * @param array $CosOptions <p>COS存储选项概览信息列表。</p>
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

        if (array_key_exists("GooseFSxOptions",$param) and $param["GooseFSxOptions"] !== null) {
            $this->GooseFSxOptions = [];
            foreach ($param["GooseFSxOptions"] as $key => $value){
                $obj = new GooseFSxOptionOverview();
                $obj->deserialize($value);
                array_push($this->GooseFSxOptions, $obj);
            }
        }

        if (array_key_exists("CosOptions",$param) and $param["CosOptions"] !== null) {
            $this->CosOptions = [];
            foreach ($param["CosOptions"] as $key => $value){
                $obj = new CosOptionOverview();
                $obj->deserialize($value);
                array_push($this->CosOptions, $obj);
            }
        }
    }
}
