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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据检索任务信息
 *
 * @method string getDataRetrievalTaskID() 获取<p>数据检索任务ID<br>示例值：dataretrievaltask-123456</p>
 * @method void setDataRetrievalTaskID(string $DataRetrievalTaskID) 设置<p>数据检索任务ID<br>示例值：dataretrievaltask-123456</p>
 * @method string getDataRetrievalId() 获取<p>迁移任务id<br>示例值：migrate-001</p>
 * @method void setDataRetrievalId(string $DataRetrievalId) 设置<p>迁移任务id<br>示例值：migrate-001</p>
 * @method string getFileSystemId() 获取<p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取示例值：cfs-xxxxxx</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取示例值：cfs-xxxxxx</p>
 * @method string getCompoundCondition() 获取<p>聚合检索条件<br>示例值：from entries|where size &gt;4096</p>
 * @method void setCompoundCondition(string $CompoundCondition) 设置<p>聚合检索条件<br>示例值：from entries|where size &gt;4096</p>
 * @method string getQueryCondition() 获取<p>列表检索条件</p>
 * @method void setQueryCondition(string $QueryCondition) 设置<p>列表检索条件</p>
 * @method string getCreateTime() 获取<p>创建时间<br>示例值：2023-01-09 15:03:57</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间<br>示例值：2023-01-09 15:03:57</p>
 * @method string getState() 获取<p>任务状态<br>已完成：completed<br>排队中：waiting<br>进行中：running<br>失败：failed</p>
 * @method void setState(string $State) 设置<p>任务状态<br>已完成：completed<br>排队中：waiting<br>进行中：running<br>失败：failed</p>
 * @method integer getFileNum() 获取<p>文件数量<br>示例：1000</p>
 * @method void setFileNum(integer $FileNum) 设置<p>文件数量<br>示例：1000</p>
 * @method integer getDirNum() 获取<p>目录数量<br>示例：1000</p>
 * @method void setDirNum(integer $DirNum) 设置<p>目录数量<br>示例：1000</p>
 * @method integer getSize() 获取<p>总文件大小，单位KiB<br>示例：1024</p>
 * @method void setSize(integer $Size) 设置<p>总文件大小，单位KiB<br>示例：1024</p>
 * @method string getFileList() 获取<p>文件清单下载地址<br>示例值：https://xx-12345.cos.ap-shanghai.myqcloud.com/list.csv</p>
 * @method void setFileList(string $FileList) 设置<p>文件清单下载地址<br>示例值：https://xx-12345.cos.ap-shanghai.myqcloud.com/list.csv</p>
 * @method string getErrorInfo() 获取<p>检索错误提示。默认：Null，当Status为failed时，将提示信息展示给用户。</p>
 * @method void setErrorInfo(string $ErrorInfo) 设置<p>检索错误提示。默认：Null，当Status为failed时，将提示信息展示给用户。</p>
 */
class DataRetrievalTaskInfo extends AbstractModel
{
    /**
     * @var string <p>数据检索任务ID<br>示例值：dataretrievaltask-123456</p>
     */
    public $DataRetrievalTaskID;

    /**
     * @var string <p>迁移任务id<br>示例值：migrate-001</p>
     */
    public $DataRetrievalId;

    /**
     * @var string <p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取示例值：cfs-xxxxxx</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>聚合检索条件<br>示例值：from entries|where size &gt;4096</p>
     */
    public $CompoundCondition;

    /**
     * @var string <p>列表检索条件</p>
     */
    public $QueryCondition;

    /**
     * @var string <p>创建时间<br>示例值：2023-01-09 15:03:57</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务状态<br>已完成：completed<br>排队中：waiting<br>进行中：running<br>失败：failed</p>
     */
    public $State;

    /**
     * @var integer <p>文件数量<br>示例：1000</p>
     */
    public $FileNum;

    /**
     * @var integer <p>目录数量<br>示例：1000</p>
     */
    public $DirNum;

    /**
     * @var integer <p>总文件大小，单位KiB<br>示例：1024</p>
     */
    public $Size;

    /**
     * @var string <p>文件清单下载地址<br>示例值：https://xx-12345.cos.ap-shanghai.myqcloud.com/list.csv</p>
     */
    public $FileList;

    /**
     * @var string <p>检索错误提示。默认：Null，当Status为failed时，将提示信息展示给用户。</p>
     */
    public $ErrorInfo;

    /**
     * @param string $DataRetrievalTaskID <p>数据检索任务ID<br>示例值：dataretrievaltask-123456</p>
     * @param string $DataRetrievalId <p>迁移任务id<br>示例值：migrate-001</p>
     * @param string $FileSystemId <p>文件系统实例 ID，通过查询文件系统 DescribeCfsFileSystems 获取示例值：cfs-xxxxxx</p>
     * @param string $CompoundCondition <p>聚合检索条件<br>示例值：from entries|where size &gt;4096</p>
     * @param string $QueryCondition <p>列表检索条件</p>
     * @param string $CreateTime <p>创建时间<br>示例值：2023-01-09 15:03:57</p>
     * @param string $State <p>任务状态<br>已完成：completed<br>排队中：waiting<br>进行中：running<br>失败：failed</p>
     * @param integer $FileNum <p>文件数量<br>示例：1000</p>
     * @param integer $DirNum <p>目录数量<br>示例：1000</p>
     * @param integer $Size <p>总文件大小，单位KiB<br>示例：1024</p>
     * @param string $FileList <p>文件清单下载地址<br>示例值：https://xx-12345.cos.ap-shanghai.myqcloud.com/list.csv</p>
     * @param string $ErrorInfo <p>检索错误提示。默认：Null，当Status为failed时，将提示信息展示给用户。</p>
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
        if (array_key_exists("DataRetrievalTaskID",$param) and $param["DataRetrievalTaskID"] !== null) {
            $this->DataRetrievalTaskID = $param["DataRetrievalTaskID"];
        }

        if (array_key_exists("DataRetrievalId",$param) and $param["DataRetrievalId"] !== null) {
            $this->DataRetrievalId = $param["DataRetrievalId"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CompoundCondition",$param) and $param["CompoundCondition"] !== null) {
            $this->CompoundCondition = $param["CompoundCondition"];
        }

        if (array_key_exists("QueryCondition",$param) and $param["QueryCondition"] !== null) {
            $this->QueryCondition = $param["QueryCondition"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("FileNum",$param) and $param["FileNum"] !== null) {
            $this->FileNum = $param["FileNum"];
        }

        if (array_key_exists("DirNum",$param) and $param["DirNum"] !== null) {
            $this->DirNum = $param["DirNum"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("FileList",$param) and $param["FileList"] !== null) {
            $this->FileList = $param["FileList"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }
    }
}
