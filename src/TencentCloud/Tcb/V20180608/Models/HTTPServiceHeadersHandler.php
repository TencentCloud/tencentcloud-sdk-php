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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP访问服务路由headers处理
 *
 * @method array getRequestHeadersToAdd() 获取添加请求头列表
 * @method void setRequestHeadersToAdd(array $RequestHeadersToAdd) 设置添加请求头列表
 * @method array getRequestHeadersToRemove() 获取删除请求头列表
 * @method void setRequestHeadersToRemove(array $RequestHeadersToRemove) 设置删除请求头列表
 * @method array getResponseHeadersToAdd() 获取添加返回头列表
 * @method void setResponseHeadersToAdd(array $ResponseHeadersToAdd) 设置添加返回头列表
 * @method array getResponseHeadersToRemove() 获取删除返回头列表
 * @method void setResponseHeadersToRemove(array $ResponseHeadersToRemove) 设置删除返回头列表
 */
class HTTPServiceHeadersHandler extends AbstractModel
{
    /**
     * @var array 添加请求头列表
     */
    public $RequestHeadersToAdd;

    /**
     * @var array 删除请求头列表
     */
    public $RequestHeadersToRemove;

    /**
     * @var array 添加返回头列表
     */
    public $ResponseHeadersToAdd;

    /**
     * @var array 删除返回头列表
     */
    public $ResponseHeadersToRemove;

    /**
     * @param array $RequestHeadersToAdd 添加请求头列表
     * @param array $RequestHeadersToRemove 删除请求头列表
     * @param array $ResponseHeadersToAdd 添加返回头列表
     * @param array $ResponseHeadersToRemove 删除返回头列表
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
        if (array_key_exists("RequestHeadersToAdd",$param) and $param["RequestHeadersToAdd"] !== null) {
            $this->RequestHeadersToAdd = [];
            foreach ($param["RequestHeadersToAdd"] as $key => $value){
                $obj = new HTTPServiceHeaderToAdd();
                $obj->deserialize($value);
                array_push($this->RequestHeadersToAdd, $obj);
            }
        }

        if (array_key_exists("RequestHeadersToRemove",$param) and $param["RequestHeadersToRemove"] !== null) {
            $this->RequestHeadersToRemove = $param["RequestHeadersToRemove"];
        }

        if (array_key_exists("ResponseHeadersToAdd",$param) and $param["ResponseHeadersToAdd"] !== null) {
            $this->ResponseHeadersToAdd = [];
            foreach ($param["ResponseHeadersToAdd"] as $key => $value){
                $obj = new HTTPServiceHeaderToAdd();
                $obj->deserialize($value);
                array_push($this->ResponseHeadersToAdd, $obj);
            }
        }

        if (array_key_exists("ResponseHeadersToRemove",$param) and $param["ResponseHeadersToRemove"] !== null) {
            $this->ResponseHeadersToRemove = $param["ResponseHeadersToRemove"];
        }
    }
}
