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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEnvironmentCache请求参数结构体
 *
 * @method string getEnvironmentId() 获取<p>环境ID。</p>
 * @method void setEnvironmentId(string $EnvironmentId) 设置<p>环境ID。</p>
 * @method string getCacheType() 获取<p>缓存类型</p><p>枚举值：</p><ul><li>RUNTIME： 清理默认缓存卷的运行缓存目录</li><li>INPUT： 清理默认缓存卷的输入缓存目录</li><li>ALL： 清空环境下全部有效缓存卷</li><li>PATH： 指定缓存卷下指定路径，需要在Path中填入实际绝对路径</li></ul>
 * @method void setCacheType(string $CacheType) 设置<p>缓存类型</p><p>枚举值：</p><ul><li>RUNTIME： 清理默认缓存卷的运行缓存目录</li><li>INPUT： 清理默认缓存卷的输入缓存目录</li><li>ALL： 清空环境下全部有效缓存卷</li><li>PATH： 指定缓存卷下指定路径，需要在Path中填入实际绝对路径</li></ul>
 * @method string getPath() 获取<p>指定路径删除</p><p>入参限制：以盘符开头的绝对路径地址</p>
 * @method void setPath(string $Path) 设置<p>指定路径删除</p><p>入参限制：以盘符开头的绝对路径地址</p>
 */
class DeleteEnvironmentCacheRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID。</p>
     */
    public $EnvironmentId;

    /**
     * @var string <p>缓存类型</p><p>枚举值：</p><ul><li>RUNTIME： 清理默认缓存卷的运行缓存目录</li><li>INPUT： 清理默认缓存卷的输入缓存目录</li><li>ALL： 清空环境下全部有效缓存卷</li><li>PATH： 指定缓存卷下指定路径，需要在Path中填入实际绝对路径</li></ul>
     */
    public $CacheType;

    /**
     * @var string <p>指定路径删除</p><p>入参限制：以盘符开头的绝对路径地址</p>
     */
    public $Path;

    /**
     * @param string $EnvironmentId <p>环境ID。</p>
     * @param string $CacheType <p>缓存类型</p><p>枚举值：</p><ul><li>RUNTIME： 清理默认缓存卷的运行缓存目录</li><li>INPUT： 清理默认缓存卷的输入缓存目录</li><li>ALL： 清空环境下全部有效缓存卷</li><li>PATH： 指定缓存卷下指定路径，需要在Path中填入实际绝对路径</li></ul>
     * @param string $Path <p>指定路径删除</p><p>入参限制：以盘符开头的绝对路径地址</p>
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
