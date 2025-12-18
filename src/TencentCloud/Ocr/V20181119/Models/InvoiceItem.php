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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混贴票据单张发票识别信息
 *
 * @method string getCode() 获取识别结果。
OK：表示识别成功；FailedOperation.UnsupportedInvoice：表示不支持识别；
FailedOperation.UnKnowError：表示识别失败；
其它错误码见各个票据接口的定义。
 * @method void setCode(string $Code) 设置识别结果。
OK：表示识别成功；FailedOperation.UnsupportedInvoice：表示不支持识别；
FailedOperation.UnKnowError：表示识别失败；
其它错误码见各个票据接口的定义。
 * @method integer getType() 获取识别出的图片所属的票据类型。
-1：未知类型
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
 * @method void setType(integer $Type) 设置识别出的图片所属的票据类型。
-1：未知类型
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
 * @method Polygon getPolygon() 获取该发票在原图片中的四点坐标。
 * @method void setPolygon(Polygon $Polygon) 设置该发票在原图片中的四点坐标。
 * @method float getAngle() 获取识别出切图后各图片的旋转角度。
 * @method void setAngle(float $Angle) 设置识别出切图后各图片的旋转角度。
 * @method SingleInvoiceItem getSingleInvoiceInfos() 获取识别到的内容。
 * @method void setSingleInvoiceInfos(SingleInvoiceItem $SingleInvoiceInfos) 设置识别到的内容。
 * @method integer getPage() 获取发票处于识别图片或PDF文件中的页码，默认从1开始。
 * @method void setPage(integer $Page) 设置发票处于识别图片或PDF文件中的页码，默认从1开始。
 * @method string getSubType() 获取发票详细类型，详见票据识别（高级版）接口文档说明中 SubType 返回值说明
 * @method void setSubType(string $SubType) 设置发票详细类型，详见票据识别（高级版）接口文档说明中 SubType 返回值说明
 * @method string getTypeDescription() 获取发票类型描述，详见票据识别（高级版）接口文档说明中 TypeDescription  返回值说明
 * @method void setTypeDescription(string $TypeDescription) 设置发票类型描述，详见票据识别（高级版）接口文档说明中 TypeDescription  返回值说明
 * @method string getCutImage() 获取切割单图文件，Base64编码后的切图后的图片文件，开启 EnableCutImage 后进行返回
 * @method void setCutImage(string $CutImage) 设置切割单图文件，Base64编码后的切图后的图片文件，开启 EnableCutImage 后进行返回
 * @method string getSubTypeDescription() 获取发票详细类型描述，详见上方 SubType 返回值说明
 * @method void setSubTypeDescription(string $SubTypeDescription) 设置发票详细类型描述，详见上方 SubType 返回值说明
 * @method array getItemPolygon() 获取该发票中所有字段坐标信息。包括字段英文名称、字段值所在位置四点坐标、字段所属行号，具体内容请点击左侧链接。
字段在原始图的坐标可以根据Polygon转换得出。
 * @method void setItemPolygon(array $ItemPolygon) 设置该发票中所有字段坐标信息。包括字段英文名称、字段值所在位置四点坐标、字段所属行号，具体内容请点击左侧链接。
字段在原始图的坐标可以根据Polygon转换得出。
 * @method string getQRCode() 获取二维码数据。
 * @method void setQRCode(string $QRCode) 设置二维码数据。
 * @method InvoiceSealInfo getInvoiceSealInfo() 获取印章信息
 * @method void setInvoiceSealInfo(InvoiceSealInfo $InvoiceSealInfo) 设置印章信息
 */
class InvoiceItem extends AbstractModel
{
    /**
     * @var string 识别结果。
OK：表示识别成功；FailedOperation.UnsupportedInvoice：表示不支持识别；
FailedOperation.UnKnowError：表示识别失败；
其它错误码见各个票据接口的定义。
     */
    public $Code;

    /**
     * @var integer 识别出的图片所属的票据类型。
-1：未知类型
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
     */
    public $Type;

    /**
     * @var Polygon 该发票在原图片中的四点坐标。
     */
    public $Polygon;

    /**
     * @var float 识别出切图后各图片的旋转角度。
     */
    public $Angle;

    /**
     * @var SingleInvoiceItem 识别到的内容。
     */
    public $SingleInvoiceInfos;

    /**
     * @var integer 发票处于识别图片或PDF文件中的页码，默认从1开始。
     */
    public $Page;

    /**
     * @var string 发票详细类型，详见票据识别（高级版）接口文档说明中 SubType 返回值说明
     */
    public $SubType;

    /**
     * @var string 发票类型描述，详见票据识别（高级版）接口文档说明中 TypeDescription  返回值说明
     */
    public $TypeDescription;

    /**
     * @var string 切割单图文件，Base64编码后的切图后的图片文件，开启 EnableCutImage 后进行返回
     */
    public $CutImage;

    /**
     * @var string 发票详细类型描述，详见上方 SubType 返回值说明
     */
    public $SubTypeDescription;

    /**
     * @var array 该发票中所有字段坐标信息。包括字段英文名称、字段值所在位置四点坐标、字段所属行号，具体内容请点击左侧链接。
字段在原始图的坐标可以根据Polygon转换得出。
     */
    public $ItemPolygon;

    /**
     * @var string 二维码数据。
     */
    public $QRCode;

    /**
     * @var InvoiceSealInfo 印章信息
     */
    public $InvoiceSealInfo;

    /**
     * @param string $Code 识别结果。
OK：表示识别成功；FailedOperation.UnsupportedInvoice：表示不支持识别；
FailedOperation.UnKnowError：表示识别失败；
其它错误码见各个票据接口的定义。
     * @param integer $Type 识别出的图片所属的票据类型。
-1：未知类型
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
17：医疗发票
18：完税凭证
19：海关缴款书
20：银行回单
     * @param Polygon $Polygon 该发票在原图片中的四点坐标。
     * @param float $Angle 识别出切图后各图片的旋转角度。
     * @param SingleInvoiceItem $SingleInvoiceInfos 识别到的内容。
     * @param integer $Page 发票处于识别图片或PDF文件中的页码，默认从1开始。
     * @param string $SubType 发票详细类型，详见票据识别（高级版）接口文档说明中 SubType 返回值说明
     * @param string $TypeDescription 发票类型描述，详见票据识别（高级版）接口文档说明中 TypeDescription  返回值说明
     * @param string $CutImage 切割单图文件，Base64编码后的切图后的图片文件，开启 EnableCutImage 后进行返回
     * @param string $SubTypeDescription 发票详细类型描述，详见上方 SubType 返回值说明
     * @param array $ItemPolygon 该发票中所有字段坐标信息。包括字段英文名称、字段值所在位置四点坐标、字段所属行号，具体内容请点击左侧链接。
字段在原始图的坐标可以根据Polygon转换得出。
     * @param string $QRCode 二维码数据。
     * @param InvoiceSealInfo $InvoiceSealInfo 印章信息
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Polygon",$param) and $param["Polygon"] !== null) {
            $this->Polygon = new Polygon();
            $this->Polygon->deserialize($param["Polygon"]);
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("SingleInvoiceInfos",$param) and $param["SingleInvoiceInfos"] !== null) {
            $this->SingleInvoiceInfos = new SingleInvoiceItem();
            $this->SingleInvoiceInfos->deserialize($param["SingleInvoiceInfos"]);
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("TypeDescription",$param) and $param["TypeDescription"] !== null) {
            $this->TypeDescription = $param["TypeDescription"];
        }

        if (array_key_exists("CutImage",$param) and $param["CutImage"] !== null) {
            $this->CutImage = $param["CutImage"];
        }

        if (array_key_exists("SubTypeDescription",$param) and $param["SubTypeDescription"] !== null) {
            $this->SubTypeDescription = $param["SubTypeDescription"];
        }

        if (array_key_exists("ItemPolygon",$param) and $param["ItemPolygon"] !== null) {
            $this->ItemPolygon = [];
            foreach ($param["ItemPolygon"] as $key => $value){
                $obj = new ItemPolygonInfo();
                $obj->deserialize($value);
                array_push($this->ItemPolygon, $obj);
            }
        }

        if (array_key_exists("QRCode",$param) and $param["QRCode"] !== null) {
            $this->QRCode = $param["QRCode"];
        }

        if (array_key_exists("InvoiceSealInfo",$param) and $param["InvoiceSealInfo"] !== null) {
            $this->InvoiceSealInfo = new InvoiceSealInfo();
            $this->InvoiceSealInfo->deserialize($param["InvoiceSealInfo"]);
        }
    }
}
