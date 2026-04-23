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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySearchView请求参数结构体
 *
 * @method string getViewId() 获取<p>视图ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图ID</p>
 * @method string getViewName() 获取<p>视图名称</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
 * @method void setViewName(string $ViewName) 设置<p>视图名称</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
 * @method string getViewType() 获取<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
 * @method void setViewType(string $ViewType) 设置<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
 * @method array getTopics() 获取<p>视图主题配置信息</p>
 * @method void setTopics(array $Topics) 设置<p>视图主题配置信息</p>
 * @method string getDescription() 获取<p>配置描述信息</p>
 * @method void setDescription(string $Description) 设置<p>配置描述信息</p>
 */
class ModifySearchViewRequest extends AbstractModel
{
    /**
     * @var string <p>视图ID</p>
     */
    public $ViewId;

    /**
     * @var string <p>视图名称</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
     */
    public $ViewName;

    /**
     * @var string <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
     */
    public $ViewType;

    /**
     * @var array <p>视图主题配置信息</p>
     */
    public $Topics;

    /**
     * @var string <p>配置描述信息</p>
     */
    public $Description;

    /**
     * @param string $ViewId <p>视图ID</p>
     * @param string $ViewName <p>视图名称</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p>
     * @param string $ViewType <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
     * @param array $Topics <p>视图主题配置信息</p>
     * @param string $Description <p>配置描述信息</p>
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
        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("ViewType",$param) and $param["ViewType"] !== null) {
            $this->ViewType = $param["ViewType"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new ViewSearchTopic();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
