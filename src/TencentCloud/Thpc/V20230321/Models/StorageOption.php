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
 * 描述集群文件系统选项
 *
 * @method array getCFSOptions() 获取<p>集群挂载CFS文件系统选项。</p>
 * @method void setCFSOptions(array $CFSOptions) 设置<p>集群挂载CFS文件系统选项。</p>
 * @method array getGooseFSOptions() 获取<p>集群挂载GooseFS文件系统选项。</p>
 * @method void setGooseFSOptions(array $GooseFSOptions) 设置<p>集群挂载GooseFS文件系统选项。</p>
 * @method array getGooseFSxOptions() 获取<p>集群挂载GooseFSx文件系统选项。</p>
 * @method void setGooseFSxOptions(array $GooseFSxOptions) 设置<p>集群挂载GooseFSx文件系统选项。</p>
 * @method array getCosOptions() 获取<p>集群挂载COS文件系统选项。</p>
 * @method void setCosOptions(array $CosOptions) 设置<p>集群挂载COS文件系统选项。</p>
 */
class StorageOption extends AbstractModel
{
    /**
     * @var array <p>集群挂载CFS文件系统选项。</p>
     */
    public $CFSOptions;

    /**
     * @var array <p>集群挂载GooseFS文件系统选项。</p>
     */
    public $GooseFSOptions;

    /**
     * @var array <p>集群挂载GooseFSx文件系统选项。</p>
     */
    public $GooseFSxOptions;

    /**
     * @var array <p>集群挂载COS文件系统选项。</p>
     */
    public $CosOptions;

    /**
     * @param array $CFSOptions <p>集群挂载CFS文件系统选项。</p>
     * @param array $GooseFSOptions <p>集群挂载GooseFS文件系统选项。</p>
     * @param array $GooseFSxOptions <p>集群挂载GooseFSx文件系统选项。</p>
     * @param array $CosOptions <p>集群挂载COS文件系统选项。</p>
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
                $obj = new CFSOption();
                $obj->deserialize($value);
                array_push($this->CFSOptions, $obj);
            }
        }

        if (array_key_exists("GooseFSOptions",$param) and $param["GooseFSOptions"] !== null) {
            $this->GooseFSOptions = [];
            foreach ($param["GooseFSOptions"] as $key => $value){
                $obj = new GooseFSOption();
                $obj->deserialize($value);
                array_push($this->GooseFSOptions, $obj);
            }
        }

        if (array_key_exists("GooseFSxOptions",$param) and $param["GooseFSxOptions"] !== null) {
            $this->GooseFSxOptions = [];
            foreach ($param["GooseFSxOptions"] as $key => $value){
                $obj = new GooseFSxOption();
                $obj->deserialize($value);
                array_push($this->GooseFSxOptions, $obj);
            }
        }

        if (array_key_exists("CosOptions",$param) and $param["CosOptions"] !== null) {
            $this->CosOptions = [];
            foreach ($param["CosOptions"] as $key => $value){
                $obj = new CosOption();
                $obj->deserialize($value);
                array_push($this->CosOptions, $obj);
            }
        }
    }
}
