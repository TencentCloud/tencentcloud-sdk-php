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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询文件检测结果响应数据
 *
 * @method string getFileMd5() 获取提交任务时的文件md5
 * @method void setFileMd5(string $FileMd5) 设置提交任务时的文件md5
 * @method string getFileName() 获取提交任务时的文件名
 * @method void setFileName(string $FileName) 设置提交任务时的文件名
 * @method integer getStatus() 获取检测执行状态：0未执行 1等待执行 2执行中 3执行失败 4执行完成 
 * @method void setStatus(integer $Status) 设置检测执行状态：0未执行 1等待执行 2执行中 3执行失败 4执行完成 
 * @method string getDetectResult() 获取    FileAbstract:文件摘要
    FileAttr:文件属性
    FileCategory:命中分级分类 array
    FileContent:命中信息json(array)
	            RuleId:规则Id
				RuleName:规则名称
				RuleLevel:规则等级
				Hits：命中词库内容
				    LibraryId：词库Id
					LibraryType:词库类型
					LibraryName:词库名称
					Attribute: 命中属性 doc.Content文件内容|doc.FileSize文件大小|doc.Name文件名|doc.Type文件类型
					String  待匹配内容
					Content 命中内容
                HitsTotal 规则命中次数
    FileMd5 文件ND5
    FileName 文件名
    FileSize 文件大小
    FileType 文件后缀
    FileTypeName 文件类型名称
    FinalDataLevel 命中最高等级
    NodeId 节点唯一Id
    NodeIp 节点IP
    NodeName 节点名称
    OperateTime 文件操作时间
    Url 文件下载Url
 * @method void setDetectResult(string $DetectResult) 设置    FileAbstract:文件摘要
    FileAttr:文件属性
    FileCategory:命中分级分类 array
    FileContent:命中信息json(array)
	            RuleId:规则Id
				RuleName:规则名称
				RuleLevel:规则等级
				Hits：命中词库内容
				    LibraryId：词库Id
					LibraryType:词库类型
					LibraryName:词库名称
					Attribute: 命中属性 doc.Content文件内容|doc.FileSize文件大小|doc.Name文件名|doc.Type文件类型
					String  待匹配内容
					Content 命中内容
                HitsTotal 规则命中次数
    FileMd5 文件ND5
    FileName 文件名
    FileSize 文件大小
    FileType 文件后缀
    FileTypeName 文件类型名称
    FinalDataLevel 命中最高等级
    NodeId 节点唯一Id
    NodeIp 节点IP
    NodeName 节点名称
    OperateTime 文件操作时间
    Url 文件下载Url
 * @method string getMessage() 获取检测执行状态描述
 * @method void setMessage(string $Message) 设置检测执行状态描述
 */
class DescribeDLPFileDetectTaskResult extends AbstractModel
{
    /**
     * @var string 提交任务时的文件md5
     */
    public $FileMd5;

    /**
     * @var string 提交任务时的文件名
     */
    public $FileName;

    /**
     * @var integer 检测执行状态：0未执行 1等待执行 2执行中 3执行失败 4执行完成 
     */
    public $Status;

    /**
     * @var string     FileAbstract:文件摘要
    FileAttr:文件属性
    FileCategory:命中分级分类 array
    FileContent:命中信息json(array)
	            RuleId:规则Id
				RuleName:规则名称
				RuleLevel:规则等级
				Hits：命中词库内容
				    LibraryId：词库Id
					LibraryType:词库类型
					LibraryName:词库名称
					Attribute: 命中属性 doc.Content文件内容|doc.FileSize文件大小|doc.Name文件名|doc.Type文件类型
					String  待匹配内容
					Content 命中内容
                HitsTotal 规则命中次数
    FileMd5 文件ND5
    FileName 文件名
    FileSize 文件大小
    FileType 文件后缀
    FileTypeName 文件类型名称
    FinalDataLevel 命中最高等级
    NodeId 节点唯一Id
    NodeIp 节点IP
    NodeName 节点名称
    OperateTime 文件操作时间
    Url 文件下载Url
     */
    public $DetectResult;

    /**
     * @var string 检测执行状态描述
     */
    public $Message;

    /**
     * @param string $FileMd5 提交任务时的文件md5
     * @param string $FileName 提交任务时的文件名
     * @param integer $Status 检测执行状态：0未执行 1等待执行 2执行中 3执行失败 4执行完成 
     * @param string $DetectResult     FileAbstract:文件摘要
    FileAttr:文件属性
    FileCategory:命中分级分类 array
    FileContent:命中信息json(array)
	            RuleId:规则Id
				RuleName:规则名称
				RuleLevel:规则等级
				Hits：命中词库内容
				    LibraryId：词库Id
					LibraryType:词库类型
					LibraryName:词库名称
					Attribute: 命中属性 doc.Content文件内容|doc.FileSize文件大小|doc.Name文件名|doc.Type文件类型
					String  待匹配内容
					Content 命中内容
                HitsTotal 规则命中次数
    FileMd5 文件ND5
    FileName 文件名
    FileSize 文件大小
    FileType 文件后缀
    FileTypeName 文件类型名称
    FinalDataLevel 命中最高等级
    NodeId 节点唯一Id
    NodeIp 节点IP
    NodeName 节点名称
    OperateTime 文件操作时间
    Url 文件下载Url
     * @param string $Message 检测执行状态描述
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
        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DetectResult",$param) and $param["DetectResult"] !== null) {
            $this->DetectResult = $param["DetectResult"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
