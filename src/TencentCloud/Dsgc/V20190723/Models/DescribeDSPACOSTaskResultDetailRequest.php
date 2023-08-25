<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPACOSTaskResultDetail请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getBucketResultId() 获取扫描Bucket结果ID
 * @method void setBucketResultId(integer $BucketResultId) 设置扫描Bucket结果ID
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getCategoryId() 获取敏感数据分类ID
 * @method void setCategoryId(integer $CategoryId) 设置敏感数据分类ID
 * @method integer getLevelId() 获取敏感数据分级ID
 * @method void setLevelId(integer $LevelId) 设置敏感数据分级ID
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认值为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认值为20，最大值为100
 * @method string getBucketName() 获取扫描桶名称。
 * @method void setBucketName(string $BucketName) 设置扫描桶名称。
 * @method array getCategoryIdList() 获取多级分类的分类ID集合
 * @method void setCategoryIdList(array $CategoryIdList) 设置多级分类的分类ID集合
 */
class DescribeDSPACOSTaskResultDetailRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 扫描Bucket结果ID
     */
    public $BucketResultId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 敏感数据分类ID
     */
    public $CategoryId;

    /**
     * @var integer 敏感数据分级ID
     */
    public $LevelId;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值为20，最大值为100
     */
    public $Limit;

    /**
     * @var string 扫描桶名称。
     */
    public $BucketName;

    /**
     * @var array 多级分类的分类ID集合
     */
    public $CategoryIdList;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $TaskId 任务ID
     * @param integer $BucketResultId 扫描Bucket结果ID
     * @param integer $ComplianceId 合规组ID
     * @param string $FileName 文件名
     * @param integer $CategoryId 敏感数据分类ID
     * @param integer $LevelId 敏感数据分级ID
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认值为20，最大值为100
     * @param string $BucketName 扫描桶名称。
     * @param array $CategoryIdList 多级分类的分类ID集合
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BucketResultId",$param) and $param["BucketResultId"] !== null) {
            $this->BucketResultId = $param["BucketResultId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CategoryIdList",$param) and $param["CategoryIdList"] !== null) {
            $this->CategoryIdList = $param["CategoryIdList"];
        }
    }
}
