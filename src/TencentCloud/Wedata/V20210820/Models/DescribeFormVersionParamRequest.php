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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFormVersionParam请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getCodeTemplateId() 获取模版Id
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置模版Id
 * @method array getOriginalParams() 获取脚本中的参数
 * @method void setOriginalParams(array $OriginalParams) 设置脚本中的参数
 * @method integer getPage() 获取页码
 * @method void setPage(integer $Page) 设置页码
 * @method integer getSize() 获取页号
 * @method void setSize(integer $Size) 设置页号
 */
class DescribeFormVersionParamRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 模版Id
     */
    public $CodeTemplateId;

    /**
     * @var array 脚本中的参数
     */
    public $OriginalParams;

    /**
     * @var integer 页码
     */
    public $Page;

    /**
     * @var integer 页号
     */
    public $Size;

    /**
     * @param string $ProjectId 项目Id
     * @param string $CodeTemplateId 模版Id
     * @param array $OriginalParams 脚本中的参数
     * @param integer $Page 页码
     * @param integer $Size 页号
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

        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }

        if (array_key_exists("OriginalParams",$param) and $param["OriginalParams"] !== null) {
            $this->OriginalParams = $param["OriginalParams"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
