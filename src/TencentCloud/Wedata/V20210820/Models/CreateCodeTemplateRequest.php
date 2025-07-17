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
 * CreateCodeTemplate请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getCodeTemplateName() 获取模版名
 * @method void setCodeTemplateName(string $CodeTemplateName) 设置模版名
 * @method integer getTaskType() 获取30Python，32DLC，50 DLC-PySpark
 * @method void setTaskType(integer $TaskType) 设置30Python，32DLC，50 DLC-PySpark
 * @method string getCodeTemplateDesc() 获取模版描述
 * @method void setCodeTemplateDesc(string $CodeTemplateDesc) 设置模版描述
 * @method string getFolderId() 获取文件夹ID
 * @method void setFolderId(string $FolderId) 设置文件夹ID
 * @method string getContent() 获取Base64转化的脚本内容
 * @method void setContent(string $Content) 设置Base64转化的脚本内容
 * @method string getProductName() 获取代码模板类型
 * @method void setProductName(string $ProductName) 设置代码模板类型
 */
class CreateCodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 模版名
     */
    public $CodeTemplateName;

    /**
     * @var integer 30Python，32DLC，50 DLC-PySpark
     */
    public $TaskType;

    /**
     * @var string 模版描述
     */
    public $CodeTemplateDesc;

    /**
     * @var string 文件夹ID
     */
    public $FolderId;

    /**
     * @var string Base64转化的脚本内容
     */
    public $Content;

    /**
     * @var string 代码模板类型
     */
    public $ProductName;

    /**
     * @param string $ProjectId 项目Id
     * @param string $CodeTemplateName 模版名
     * @param integer $TaskType 30Python，32DLC，50 DLC-PySpark
     * @param string $CodeTemplateDesc 模版描述
     * @param string $FolderId 文件夹ID
     * @param string $Content Base64转化的脚本内容
     * @param string $ProductName 代码模板类型
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CodeTemplateName",$param) and $param["CodeTemplateName"] !== null) {
            $this->CodeTemplateName = $param["CodeTemplateName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CodeTemplateDesc",$param) and $param["CodeTemplateDesc"] !== null) {
            $this->CodeTemplateDesc = $param["CodeTemplateDesc"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
