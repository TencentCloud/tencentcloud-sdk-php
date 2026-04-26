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
 * @method string getLogsetId() 获取<p>日志集id</p><p>查询视图所属的日志集，仅用于管理查询视图，查询视图中包含的主题可与该日志集无关</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p><p>查询视图所属的日志集，仅用于管理查询视图，查询视图中包含的主题可与该日志集无关</p>
 * @method string getLogsetRegion() 获取<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method void setLogsetRegion(string $LogsetRegion) 设置<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method string getViewName() 获取<p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
 * @method string getViewType() 获取<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题类型应该与ViewType类型匹配</p>
 * @method void setViewType(string $ViewType) 设置<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题类型应该与ViewType类型匹配</p>
 * @method array getTopics() 获取<p>查询视图中包含的主题，最大可包含10个主题</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method void setTopics(array $Topics) 设置<p>查询视图中包含的主题，最大可包含10个主题</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
 * @method string getViewIdPrefix() 获取<p>自定义查询视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>创建成功的查询视图 ViewId 格式为 ${ViewIdPrefix}-view</p>
 * @method void setViewIdPrefix(string $ViewIdPrefix) 设置<p>自定义查询视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>创建成功的查询视图 ViewId 格式为 ${ViewIdPrefix}-view</p>
 * @method string getDescription() 获取<p>描述信息</p>
 * @method void setDescription(string $Description) 设置<p>描述信息</p>
 */
class CreateSearchViewRequest extends AbstractModel
{
    /**
     * @var string <p>日志集id</p><p>查询视图所属的日志集，仅用于管理查询视图，查询视图中包含的主题可与该日志集无关</p>
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
     * @var string <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题类型应该与ViewType类型匹配</p>
     */
    public $ViewType;

    /**
     * @var array <p>查询视图中包含的主题，最大可包含10个主题</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     */
    public $Topics;

    /**
     * @var string <p>自定义查询视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>创建成功的查询视图 ViewId 格式为 ${ViewIdPrefix}-view</p>
     */
    public $ViewIdPrefix;

    /**
     * @var string <p>描述信息</p>
     */
    public $Description;

    /**
     * @param string $LogsetId <p>日志集id</p><p>查询视图所属的日志集，仅用于管理查询视图，查询视图中包含的主题可与该日志集无关</p>
     * @param string $LogsetRegion <p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
     * @param string $ViewName <p>视图名称</p><p>入参限制：最大支持255字符，不能包含&quot;|&quot;字符。</p>
     * @param string $ViewType <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul><p>Topics字段中配置的主题类型应该与ViewType类型匹配</p>
     * @param array $Topics <p>查询视图中包含的主题，最大可包含10个主题</p><p>Topics字段中配置的主题信息应该与ViewType类型匹配</p>
     * @param string $ViewIdPrefix <p>自定义查询视图id前缀</p><p>参数格式：<code>^[a-z0-9][a-z0-9_-]{1,61}[a-z0-9]$</code></p><p>创建成功的查询视图 ViewId 格式为 ${ViewIdPrefix}-view</p>
     * @param string $Description <p>描述信息</p>
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

        if (array_key_exists("ViewIdPrefix",$param) and $param["ViewIdPrefix"] !== null) {
            $this->ViewIdPrefix = $param["ViewIdPrefix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
