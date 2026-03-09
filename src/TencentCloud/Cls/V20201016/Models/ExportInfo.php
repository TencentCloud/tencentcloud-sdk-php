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
 * 日志导出信息
 *
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getExportId() 获取<p>日志导出任务ID</p>
 * @method void setExportId(string $ExportId) 设置<p>日志导出任务ID</p>
 * @method string getQuery() 获取<p>日志导出查询语句</p>
 * @method void setQuery(string $Query) 设置<p>日志导出查询语句</p>
 * @method string getFileName() 获取<p>日志导出文件名</p>
 * @method void setFileName(string $FileName) 设置<p>日志导出文件名</p>
 * @method integer getFileSize() 获取<p>日志文件大小</p><p>单位：Byte</p>
 * @method void setFileSize(integer $FileSize) 设置<p>日志文件大小</p><p>单位：Byte</p>
 * @method string getOrder() 获取<p>日志导出时间排序</p>
 * @method void setOrder(string $Order) 设置<p>日志导出时间排序</p>
 * @method string getFormat() 获取<p>日志导出格式</p>
 * @method void setFormat(string $Format) 设置<p>日志导出格式</p>
 * @method integer getCount() 获取<p>日志导出数量</p>
 * @method void setCount(integer $Count) 设置<p>日志导出数量</p>
 * @method string getStatus() 获取<p>日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中</p>
 * @method void setStatus(string $Status) 设置<p>日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中</p>
 * @method integer getFrom() 获取<p>日志导出起始时间，毫秒时间戳</p>
 * @method void setFrom(integer $From) 设置<p>日志导出起始时间，毫秒时间戳</p>
 * @method integer getTo() 获取<p>日志导出结束时间，毫秒时间戳</p>
 * @method void setTo(integer $To) 设置<p>日志导出结束时间，毫秒时间戳</p>
 * @method string getCosPath() 获取<p>日志导出路径,有效期一个小时，请尽快使用该路径下载。</p>
 * @method void setCosPath(string $CosPath) 设置<p>日志导出路径,有效期一个小时，请尽快使用该路径下载。</p>
 * @method string getCreateTime() 获取<p>日志导出创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>日志导出创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
 * @method integer getSyntaxRule() 获取<p>语法规则。 默认值为0。<br>0：Lucene语法，1：CQL语法。</p>
 * @method void setSyntaxRule(integer $SyntaxRule) 设置<p>语法规则。 默认值为0。<br>0：Lucene语法，1：CQL语法。</p>
 * @method array getDerivedFields() 获取<p>导出字段</p>
 * @method void setDerivedFields(array $DerivedFields) 设置<p>导出字段</p>
 */
class ExportInfo extends AbstractModel
{
    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志导出任务ID</p>
     */
    public $ExportId;

    /**
     * @var string <p>日志导出查询语句</p>
     */
    public $Query;

    /**
     * @var string <p>日志导出文件名</p>
     */
    public $FileName;

    /**
     * @var integer <p>日志文件大小</p><p>单位：Byte</p>
     */
    public $FileSize;

    /**
     * @var string <p>日志导出时间排序</p>
     */
    public $Order;

    /**
     * @var string <p>日志导出格式</p>
     */
    public $Format;

    /**
     * @var integer <p>日志导出数量</p>
     */
    public $Count;

    /**
     * @var string <p>日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中</p>
     */
    public $Status;

    /**
     * @var integer <p>日志导出起始时间，毫秒时间戳</p>
     */
    public $From;

    /**
     * @var integer <p>日志导出结束时间，毫秒时间戳</p>
     */
    public $To;

    /**
     * @var string <p>日志导出路径,有效期一个小时，请尽快使用该路径下载。</p>
     */
    public $CosPath;

    /**
     * @var string <p>日志导出创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>语法规则。 默认值为0。<br>0：Lucene语法，1：CQL语法。</p>
     */
    public $SyntaxRule;

    /**
     * @var array <p>导出字段</p>
     */
    public $DerivedFields;

    /**
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $ExportId <p>日志导出任务ID</p>
     * @param string $Query <p>日志导出查询语句</p>
     * @param string $FileName <p>日志导出文件名</p>
     * @param integer $FileSize <p>日志文件大小</p><p>单位：Byte</p>
     * @param string $Order <p>日志导出时间排序</p>
     * @param string $Format <p>日志导出格式</p>
     * @param integer $Count <p>日志导出数量</p>
     * @param string $Status <p>日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中</p>
     * @param integer $From <p>日志导出起始时间，毫秒时间戳</p>
     * @param integer $To <p>日志导出结束时间，毫秒时间戳</p>
     * @param string $CosPath <p>日志导出路径,有效期一个小时，请尽快使用该路径下载。</p>
     * @param string $CreateTime <p>日志导出创建时间<br>时间格式：yyyy-MM-dd HH:mm:ss</p>
     * @param integer $SyntaxRule <p>语法规则。 默认值为0。<br>0：Lucene语法，1：CQL语法。</p>
     * @param array $DerivedFields <p>导出字段</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("ExportId",$param) and $param["ExportId"] !== null) {
            $this->ExportId = $param["ExportId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("DerivedFields",$param) and $param["DerivedFields"] !== null) {
            $this->DerivedFields = $param["DerivedFields"];
        }
    }
}
