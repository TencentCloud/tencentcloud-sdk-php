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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配额组资源信息
 *
 * @method Tag getTag() 获取<p>配额组关联的标签键值</p>
 * @method void setTag(Tag $Tag) 设置<p>配额组关联的标签键值</p>
 * @method string getName() 获取<p>配额组名称</p>
 * @method void setName(string $Name) 设置<p>配额组名称</p>
 * @method QuotaResourceInfo getQuota() 获取<p>配额组各资源维度的配额上限</p>
 * @method void setQuota(QuotaResourceInfo $Quota) 设置<p>配额组各资源维度的配额上限</p>
 * @method QuotaResourceInfo getUsage() 获取<p>配额组各资源维度的当前用量</p>
 * @method void setUsage(QuotaResourceInfo $Usage) 设置<p>配额组各资源维度的当前用量</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：RFC3339 格式</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：RFC3339 格式</p>
 * @method string getUpdateTime() 获取<p>最后更新时间</p><p>参数格式：RFC3339 格式</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后更新时间</p><p>参数格式：RFC3339 格式</p>
 */
class QuotaGroupOverview extends AbstractModel
{
    /**
     * @var Tag <p>配额组关联的标签键值</p>
     */
    public $Tag;

    /**
     * @var string <p>配额组名称</p>
     */
    public $Name;

    /**
     * @var QuotaResourceInfo <p>配额组各资源维度的配额上限</p>
     */
    public $Quota;

    /**
     * @var QuotaResourceInfo <p>配额组各资源维度的当前用量</p>
     */
    public $Usage;

    /**
     * @var string <p>创建时间</p><p>参数格式：RFC3339 格式</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后更新时间</p><p>参数格式：RFC3339 格式</p>
     */
    public $UpdateTime;

    /**
     * @param Tag $Tag <p>配额组关联的标签键值</p>
     * @param string $Name <p>配额组名称</p>
     * @param QuotaResourceInfo $Quota <p>配额组各资源维度的配额上限</p>
     * @param QuotaResourceInfo $Usage <p>配额组各资源维度的当前用量</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：RFC3339 格式</p>
     * @param string $UpdateTime <p>最后更新时间</p><p>参数格式：RFC3339 格式</p>
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new Tag();
            $this->Tag->deserialize($param["Tag"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = new QuotaResourceInfo();
            $this->Quota->deserialize($param["Quota"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new QuotaResourceInfo();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
