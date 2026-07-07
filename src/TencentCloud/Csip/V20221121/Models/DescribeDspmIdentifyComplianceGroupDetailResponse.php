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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmIdentifyComplianceGroupDetail返回参数结构体
 *
 * @method integer getId() 获取<p>识别模板ID</p>
 * @method void setId(integer $Id) 设置<p>识别模板ID</p>
 * @method string getName() 获取<p>识别模板名称</p>
 * @method void setName(string $Name) 设置<p>识别模板名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getType() 获取<p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method void setType(integer $Type) 设置<p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
 * @method integer getLevelGroupId() 获取<p>关联级别组ID</p>
 * @method void setLevelGroupId(integer $LevelGroupId) 设置<p>关联级别组ID</p>
 * @method array getDetail() 获取<p>无</p>
 * @method void setDetail(array $Detail) 设置<p>无</p>
 * @method string getLevelGroupName() 获取<p>关联级别组名称</p>
 * @method void setLevelGroupName(string $LevelGroupName) 设置<p>关联级别组名称</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmIdentifyComplianceGroupDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>识别模板ID</p>
     */
    public $Id;

    /**
     * @var string <p>识别模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>关联级别组ID</p>
     */
    public $LevelGroupId;

    /**
     * @var array <p>无</p>
     */
    public $Detail;

    /**
     * @var string <p>关联级别组名称</p>
     */
    public $LevelGroupName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>识别模板ID</p>
     * @param string $Name <p>识别模板名称</p>
     * @param string $Description <p>描述</p>
     * @param integer $Type <p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>0： 未启用</li><li>1： 启用</li></ul>
     * @param integer $LevelGroupId <p>关联级别组ID</p>
     * @param array $Detail <p>无</p>
     * @param string $LevelGroupName <p>关联级别组名称</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new DspmIdentifyComplianceCategoryRelation();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("LevelGroupName",$param) and $param["LevelGroupName"] !== null) {
            $this->LevelGroupName = $param["LevelGroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
