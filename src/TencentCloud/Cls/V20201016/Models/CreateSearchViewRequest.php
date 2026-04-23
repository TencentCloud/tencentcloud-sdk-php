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
 * CreateSearchView请求参数结构体
 *
 * @method string getLogsetId() 获取<p>日志集id</p><p>标记视图所属该日志集，用于查询日志集下的查询视图配置</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p><p>标记视图所属该日志集，用于查询日志集下的查询视图配置</p>
 * @method string getLogsetRegion() 获取<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method void setLogsetRegion(string $LogsetRegion) 设置<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method string getViewName() 获取<p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
 * @method string getViewType() 获取<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method void setViewType(string $ViewType) 设置<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method array getTopics() 获取<p>视图主题配置信息</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method void setTopics(array $Topics) 设置<p>视图主题配置信息</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method string getDescription() 获取<p>配置描述信息</p>
 * @method void setDescription(string $Description) 设置<p>配置描述信息</p>
 * @method string getViewIdPrefix() 获取<p>自定义视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>配置成功之后ViewId格式: ${ViewIdPrefix}-view</p>
 * @method void setViewIdPrefix(string $ViewIdPrefix) 设置<p>自定义视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>配置成功之后ViewId格式: ${ViewIdPrefix}-view</p>
 */
class CreateSearchViewRequest extends AbstractModel
{
    /**
     * @var string <p>日志集id</p><p>标记视图所属该日志集，用于查询日志集下的查询视图配置</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
     */
    public $LogsetRegion;

    /**
     * @var string <p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
     */
    public $ViewName;

    /**
     * @var string <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     */
    public $ViewType;

    /**
     * @var array <p>视图主题配置信息</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     */
    public $Topics;

    /**
     * @var string <p>配置描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>自定义视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>配置成功之后ViewId格式: ${ViewIdPrefix}-view</p>
     */
    public $ViewIdPrefix;

    /**
     * @param string $LogsetId <p>日志集id</p><p>标记视图所属该日志集，用于查询日志集下的查询视图配置</p>
     * @param string $LogsetRegion <p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
     * @param string $ViewName <p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
     * @param string $ViewType <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     * @param array $Topics <p>视图主题配置信息</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     * @param string $Description <p>配置描述信息</p>
     * @param string $ViewIdPrefix <p>自定义视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>配置成功之后ViewId格式: ${ViewIdPrefix}-view</p>
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetRegion",$param) and $param["LogsetRegion"] !== null) {
            $this->LogsetRegion = $param["LogsetRegion"];
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

        if (array_key_exists("ViewIdPrefix",$param) and $param["ViewIdPrefix"] !== null) {
            $this->ViewIdPrefix = $param["ViewIdPrefix"];
        }
    }
}
