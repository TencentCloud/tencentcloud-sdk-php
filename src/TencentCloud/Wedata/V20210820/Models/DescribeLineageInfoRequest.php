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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLineageInfo请求参数结构体
 *
 * @method string getResourceOriId() 获取实体原始唯一ID
 * @method void setResourceOriId(string $ResourceOriId) 设置实体原始唯一ID
 * @method string getResourceType() 获取实体类型
 * @method void setResourceType(string $ResourceType) 设置实体类型
 * @method string getQualifiedId() 获取血缘唯一ID
 * @method void setQualifiedId(string $QualifiedId) 设置血缘唯一ID
 * @method string getDirection() 获取查询方向
 * @method void setDirection(string $Direction) 设置查询方向
 * @method integer getInputDepth() 获取查询入度
 * @method void setInputDepth(integer $InputDepth) 设置查询入度
 * @method integer getOutputDepth() 获取查询出度
 * @method void setOutputDepth(integer $OutputDepth) 设置查询出度
 * @method string getPlatform() 获取数据来源
 * @method void setPlatform(string $Platform) 设置数据来源
 * @method string getLineageType() 获取血缘类型（分页使用）
 * @method void setLineageType(string $LineageType) 设置血缘类型（分页使用）
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 */
class DescribeLineageInfoRequest extends AbstractModel
{
    /**
     * @var string 实体原始唯一ID
     */
    public $ResourceOriId;

    /**
     * @var string 实体类型
     */
    public $ResourceType;

    /**
     * @var string 血缘唯一ID
     */
    public $QualifiedId;

    /**
     * @var string 查询方向
     */
    public $Direction;

    /**
     * @var integer 查询入度
     */
    public $InputDepth;

    /**
     * @var integer 查询出度
     */
    public $OutputDepth;

    /**
     * @var string 数据来源
     */
    public $Platform;

    /**
     * @var string 血缘类型（分页使用）
     */
    public $LineageType;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @param string $ResourceOriId 实体原始唯一ID
     * @param string $ResourceType 实体类型
     * @param string $QualifiedId 血缘唯一ID
     * @param string $Direction 查询方向
     * @param integer $InputDepth 查询入度
     * @param integer $OutputDepth 查询出度
     * @param string $Platform 数据来源
     * @param string $LineageType 血缘类型（分页使用）
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页大小
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
        if (array_key_exists("ResourceOriId",$param) and $param["ResourceOriId"] !== null) {
            $this->ResourceOriId = $param["ResourceOriId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("QualifiedId",$param) and $param["QualifiedId"] !== null) {
            $this->QualifiedId = $param["QualifiedId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("InputDepth",$param) and $param["InputDepth"] !== null) {
            $this->InputDepth = $param["InputDepth"];
        }

        if (array_key_exists("OutputDepth",$param) and $param["OutputDepth"] !== null) {
            $this->OutputDepth = $param["OutputDepth"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("LineageType",$param) and $param["LineageType"] !== null) {
            $this->LineageType = $param["LineageType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
