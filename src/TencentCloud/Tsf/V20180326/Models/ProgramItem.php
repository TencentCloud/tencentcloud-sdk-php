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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tsf-privilege模块，数据项
 *
 * @method string getProgramItemId() 获取<p>数据项ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>接口查询已创建的数据集或登录控制台进行查看；也可以通过调用<a href="https://cloud.tencent.com/document/api/649/108544">CreateProgram</a>创建新的数据集。</p>
 * @method void setProgramItemId(string $ProgramItemId) 设置<p>数据项ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>接口查询已创建的数据集或登录控制台进行查看；也可以通过调用<a href="https://cloud.tencent.com/document/api/649/108544">CreateProgram</a>创建新的数据集。</p>
 * @method Resource getResource() 获取<p>资源</p>
 * @method void setResource(Resource $Resource) 设置<p>资源</p>
 * @method array getValueList() 获取<p>数据值列表</p>
 * @method void setValueList(array $ValueList) 设置<p>数据值列表</p>
 * @method boolean getIsAll() 获取<p>全选标识，true: 全选；false: 非全选</p>
 * @method void setIsAll(boolean $IsAll) 设置<p>全选标识，true: 全选；false: 非全选</p>
 * @method integer getCreationTime() 获取<p>创建时间，时间戳格式【Long】</p>
 * @method void setCreationTime(integer $CreationTime) 设置<p>创建时间，时间戳格式【Long】</p>
 * @method integer getLastUpdateTime() 获取<p>最后更新时间，时间戳格式【Long】，单位毫秒</p>
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置<p>最后更新时间，时间戳格式【Long】，单位毫秒</p>
 * @method boolean getDeleteFlag() 获取<p>删除标识，true: 可删除；false: 不可删除</p>
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置<p>删除标识，true: 可删除；false: 不可删除</p>
 * @method string getProgramId() 获取<p>数据集ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>查询接口获取</p>
 * @method void setProgramId(string $ProgramId) 设置<p>数据集ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>查询接口获取</p>
 */
class ProgramItem extends AbstractModel
{
    /**
     * @var string <p>数据项ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>接口查询已创建的数据集或登录控制台进行查看；也可以通过调用<a href="https://cloud.tencent.com/document/api/649/108544">CreateProgram</a>创建新的数据集。</p>
     */
    public $ProgramItemId;

    /**
     * @var Resource <p>资源</p>
     */
    public $Resource;

    /**
     * @var array <p>数据值列表</p>
     */
    public $ValueList;

    /**
     * @var boolean <p>全选标识，true: 全选；false: 非全选</p>
     */
    public $IsAll;

    /**
     * @var integer <p>创建时间，时间戳格式【Long】</p>
     */
    public $CreationTime;

    /**
     * @var integer <p>最后更新时间，时间戳格式【Long】，单位毫秒</p>
     */
    public $LastUpdateTime;

    /**
     * @var boolean <p>删除标识，true: 可删除；false: 不可删除</p>
     */
    public $DeleteFlag;

    /**
     * @var string <p>数据集ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>查询接口获取</p>
     */
    public $ProgramId;

    /**
     * @param string $ProgramItemId <p>数据项ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>接口查询已创建的数据集或登录控制台进行查看；也可以通过调用<a href="https://cloud.tencent.com/document/api/649/108544">CreateProgram</a>创建新的数据集。</p>
     * @param Resource $Resource <p>资源</p>
     * @param array $ValueList <p>数据值列表</p>
     * @param boolean $IsAll <p>全选标识，true: 全选；false: 非全选</p>
     * @param integer $CreationTime <p>创建时间，时间戳格式【Long】</p>
     * @param integer $LastUpdateTime <p>最后更新时间，时间戳格式【Long】，单位毫秒</p>
     * @param boolean $DeleteFlag <p>删除标识，true: 可删除；false: 不可删除</p>
     * @param string $ProgramId <p>数据集ID，调用<a href="https://console.cloud.tencent.com/tsf/privilege?rid=1&amp;tab=program">DescribePrograms</a>查询接口获取</p>
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
        if (array_key_exists("ProgramItemId",$param) and $param["ProgramItemId"] !== null) {
            $this->ProgramItemId = $param["ProgramItemId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = $param["ValueList"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }
    }
}
