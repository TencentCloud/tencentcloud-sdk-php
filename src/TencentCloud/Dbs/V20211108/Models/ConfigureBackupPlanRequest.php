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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureBackupPlan请求参数结构体
 *
 * @method string getBackupPlanId() 获取备份计划 ID。
 * @method void setBackupPlanId(string $BackupPlanId) 设置备份计划 ID。
 * @method string getBackupPlanName() 获取备份计划名称。支持数字、英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@,且长度不能超过60。
 * @method void setBackupPlanName(string $BackupPlanName) 设置备份计划名称。支持数字、英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@,且长度不能超过60。
 * @method integer getUpperParallel() 获取全量备份并发数上限。
 * @method void setUpperParallel(integer $UpperParallel) 设置全量备份并发数上限。
 * @method BackupEndpoint getSourceEndPoint() 获取备份源实例信息。
 * @method void setSourceEndPoint(BackupEndpoint $SourceEndPoint) 设置备份源实例信息。
 * @method BackupObject getBackupObject() 获取备份对象信息。
 * @method void setBackupObject(BackupObject $BackupObject) 设置备份对象信息。
 * @method BackupStrategy getBackupStrategy() 获取备份策略。
 * @method void setBackupStrategy(BackupStrategy $BackupStrategy) 设置备份策略。
 * @method string getPlainText() 获取加密信息。当需要使用SSE-KMS需要传入该值，你可以通过 KMS 的 GenerateDataKey 接口生成。
 * @method void setPlainText(string $PlainText) 设置加密信息。当需要使用SSE-KMS需要传入该值，你可以通过 KMS 的 GenerateDataKey 接口生成。
 */
class ConfigureBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 备份计划 ID。
     */
    public $BackupPlanId;

    /**
     * @var string 备份计划名称。支持数字、英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@,且长度不能超过60。
     */
    public $BackupPlanName;

    /**
     * @var integer 全量备份并发数上限。
     */
    public $UpperParallel;

    /**
     * @var BackupEndpoint 备份源实例信息。
     */
    public $SourceEndPoint;

    /**
     * @var BackupObject 备份对象信息。
     */
    public $BackupObject;

    /**
     * @var BackupStrategy 备份策略。
     */
    public $BackupStrategy;

    /**
     * @var string 加密信息。当需要使用SSE-KMS需要传入该值，你可以通过 KMS 的 GenerateDataKey 接口生成。
     */
    public $PlainText;

    /**
     * @param string $BackupPlanId 备份计划 ID。
     * @param string $BackupPlanName 备份计划名称。支持数字、英文大小写字母、中文以及特殊字符_-./()（）[]+=：:@,且长度不能超过60。
     * @param integer $UpperParallel 全量备份并发数上限。
     * @param BackupEndpoint $SourceEndPoint 备份源实例信息。
     * @param BackupObject $BackupObject 备份对象信息。
     * @param BackupStrategy $BackupStrategy 备份策略。
     * @param string $PlainText 加密信息。当需要使用SSE-KMS需要传入该值，你可以通过 KMS 的 GenerateDataKey 接口生成。
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
        if (array_key_exists("BackupPlanId",$param) and $param["BackupPlanId"] !== null) {
            $this->BackupPlanId = $param["BackupPlanId"];
        }

        if (array_key_exists("BackupPlanName",$param) and $param["BackupPlanName"] !== null) {
            $this->BackupPlanName = $param["BackupPlanName"];
        }

        if (array_key_exists("UpperParallel",$param) and $param["UpperParallel"] !== null) {
            $this->UpperParallel = $param["UpperParallel"];
        }

        if (array_key_exists("SourceEndPoint",$param) and $param["SourceEndPoint"] !== null) {
            $this->SourceEndPoint = new BackupEndpoint();
            $this->SourceEndPoint->deserialize($param["SourceEndPoint"]);
        }

        if (array_key_exists("BackupObject",$param) and $param["BackupObject"] !== null) {
            $this->BackupObject = new BackupObject();
            $this->BackupObject->deserialize($param["BackupObject"]);
        }

        if (array_key_exists("BackupStrategy",$param) and $param["BackupStrategy"] !== null) {
            $this->BackupStrategy = new BackupStrategy();
            $this->BackupStrategy->deserialize($param["BackupStrategy"]);
        }

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }
    }
}
