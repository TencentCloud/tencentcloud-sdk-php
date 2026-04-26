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
 * 查询视图信息
 *
 * @method string getViewId() 获取<p>视图ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图ID</p>
 * @method string getViewName() 获取<p>视图名称</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名称</p>
 * @method string getViewType() 获取<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
 * @method void setViewType(string $ViewType) 设置<p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
 * @method string getLogsetId() 获取<p>日志集id</p><p>视图所属日志集</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p><p>视图所属日志集</p>
 * @method string getLogsetRegion() 获取<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method void setLogsetRegion(string $LogsetRegion) 设置<p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
 * @method array getTopics() 获取<p>视图日志主题信息</p>
 * @method void setTopics(array $Topics) 设置<p>视图日志主题信息</p>
 * @method string getDescription() 获取<p>视图描述</p>
 * @method void setDescription(string $Description) 设置<p>视图描述</p>
 * @method integer getCreateTime() 获取<p>创建时间</p><p>单位：秒级别时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p><p>单位：秒级别时间戳</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p><p>单位：秒级别时间戳</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p><p>单位：秒级别时间戳</p>
 */
class SearchViewInfo extends AbstractModel
{
    /**
     * @var string <p>视图ID</p>
     */
    public $ViewId;

    /**
     * @var string <p>视图名称</p>
     */
    public $ViewName;

    /**
     * @var string <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
     */
    public $ViewType;

    /**
     * @var string <p>日志集id</p><p>视图所属日志集</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
     */
    public $LogsetRegion;

    /**
     * @var array <p>视图日志主题信息</p>
     */
    public $Topics;

    /**
     * @var string <p>视图描述</p>
     */
    public $Description;

    /**
     * @var integer <p>创建时间</p><p>单位：秒级别时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p><p>单位：秒级别时间戳</p>
     */
    public $UpdateTime;

    /**
     * @param string $ViewId <p>视图ID</p>
     * @param string $ViewName <p>视图名称</p>
     * @param string $ViewType <p>视图类型</p><p>枚举值：</p><ul><li>log： 日志主题</li><li>metric： 指标主题</li></ul>
     * @param string $LogsetId <p>日志集id</p><p>视图所属日志集</p>
     * @param string $LogsetRegion <p>日志集所属地域</p><p>参数格式：ap-guangzhou</p>
     * @param array $Topics <p>视图日志主题信息</p>
     * @param string $Description <p>视图描述</p>
     * @param integer $CreateTime <p>创建时间</p><p>单位：秒级别时间戳</p>
     * @param integer $UpdateTime <p>更新时间</p><p>单位：秒级别时间戳</p>
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

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetRegion",$param) and $param["LogsetRegion"] !== null) {
            $this->LogsetRegion = $param["LogsetRegion"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
